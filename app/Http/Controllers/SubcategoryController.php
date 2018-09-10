<?php

namespace App\Http\Controllers;
use App\subcategory;
use Illuminate\Http\Request;
use DB;
use App\Category;
use App\Info;
class SubcategoryController extends Controller
{
    public function createSubCategory(){
        $category= Category::all();
        return view('admin.subcategory.createsubcategory',['category'=>$category]);
    }

    public function storeSubCategory(Request $request){
        $this->validate($request,[
            'categoryId'=>'required',
            'subcategoryName'=>'required',
            'subcategoryDescriptoin'=>'required',
        ]);

        $subcategory = new subcategory();
        $subcategory->categoryId=$request->categoryId;
        $subcategory->subcategoryName=$request->subcategoryName;
        $subcategory->subcategoryDescriptoin=$request->subcategoryDescriptoin;
        $subcategory->publication_status=$request->publication_status;
        $subcategory->save();

        return redirect('adminpanel/sub-category/add')->with('message','Category Created successfully');
    }

    public  function manageSubCategory(){
        return view('admin.subcategory.managesubcategory');
    }
    //Process for data Table
    public  function processSubcat(Request $request){
        //print_r($request->all()); 
        $category= Category::all();
        $columns = array(
            0 => 'categoryId',
            1 => 'subcategoryName',
            2 => 'subcategoryDescriptoin',
            3 => 'publication_status',
            4 => 'action'
        );
        
        $totalData = subcategory::count();
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
        
        if(empty($request->input('search.value'))){
            $posts = subcategory::offset($start)
                    ->limit($limit)
                    ->orderBy($order,$dir)
                    ->get();
            $totalFiltered = subcategory::count();
        }else{
            $search = $request->input('search.value');
            $posts = subcategory::where('subcategoryName', 'like', "%{$search}%")
                            ->orWhere('subcategoryDescriptoin','like',"%{$search}%")
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order, $dir)
                            ->get();
            $totalFiltered = subcategory::where('subcategoryName', 'like', "%{$search}%")
                            ->orWhere('subcategoryDescriptoin','like',"%{$search}%")
                            ->count();
        }       
                    
        
        $data = array();
        
        if($posts){
            foreach($posts as $r){
                foreach ($category as $cat) {
                    if($r->categoryId==$cat->id)
                        $nestedData['categoryId'] = $cat->categoryName;
                }
                $nestedData['subcategoryName'] = $r->subcategoryName;
                $nestedData['subcategoryDescriptoin'] = $r->subcategoryDescriptoin;
                $nestedData['publication_status'] =$r->publication_status==1 ? 'Publish':'Unpublish';
                $nestedData['action'] = '
                    <a href="/adminpanel/sub-category/edit/'.$r->id.'" class="btn btn-warning btn-xs">Edit</a>
                    <a href="/adminpanel/sub-category/delete/'.$r->id.'" class="btn btn-danger btn-xs" onclick="return confirm(Are you sure to delete);">Delete</a>
                ';
                $data[] = $nestedData;
            }
        }
        
        $json_data = array(
            "draw"          => intval($request->input('draw')),
            "recordsTotal"  => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data"          => $data
        );
        
        echo json_encode($json_data);
    
       
    }

    public function editSubCategory($id=null){
        $categoryById=subcategory::where('id',$id)->first();
        $category= Category::all();
        $subcategoryById=DB::table('subcategories')
            ->join('categories','subcategories.categoryId','=','categories.id')
            ->select('subcategories.*','categories.categoryName','categories.id')
            ->where('subcategories.id',$id)
            ->first();

        return view('admin.subcategory.subcategoryedit',['subcategoryById'=>$subcategoryById,'category'=>$category]);
    }

    public function updateSubCategory(Request $request){
        $this->validate($request,[
            'categoryId'=>'required',
            'subcategoryName'=>'required',
            'subcategoryDescriptoin'=>'required',
        ]);
        $subcategory=subcategory::findOrFail($request->subcategoryId)->first();
        $subcategory->categoryId=$request->categoryId;
        $subcategory->subcategoryName=$request->subcategoryName;
        $subcategory->subcategoryDescriptoin=$request->subcategoryDescriptoin;
        $subcategory->publication_status=$request->publication_status;
        $subcategory->save();
        return redirect('adminpanel/sub-category/manage')->with('message','Subcategory Updated Sueccessfully');

    }
    public function deleteSubCategory($id){
        $subcategory=subcategory::findOrFail($id);
        $subcategory->delete();
        return redirect('adminpanel/sub-category/manage')->with('message','Sub-Category Deleted successfully');
    }

}
