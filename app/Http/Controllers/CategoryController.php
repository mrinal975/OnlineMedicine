<?php

namespace App\Http\Controllers;
use App\Category;
use App\subcategory;
use App\product;
use App\Http\Controllers\Controller;
use App\Info;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function createCategory(){
        return view('admin.category.createCategory');
    }

    public function storeCategory(Request $request){
        $this->validate($request,[
            'categoryName'=>'required',
            'categoryImage'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024|min:20',
            'publication_status'=>'required',
        ]);
        $categoryImage=$request->file('categoryImage');
        $name=$categoryImage->getClientOriginalName();
        $uploadPath='productImage/';
        $imageUrl=$uploadPath.$name;
        $categoryImage->move($uploadPath,$name);

        $Category=new Category();
        $Category->categoryName=$request->categoryName;
        $Category->categoryImage=$imageUrl;
        $Category->publication_status=$request->publication_status;
        $Category->save();
        return redirect('adminpanel/category/add')->with('message','Category Created successfully');

    }
    public function manageCategory(){
        return view('admin.category.manageCategory');
    }

        //Process for data Table
    public  function processcategory(Request $request){
        //print_r($request->all()); 
        $category= Category::all();
        $columns = array(
            0 => 'categoryName',
            1 => 'categoryImage',
            2 => 'publication_status',
            3 => 'action'
        );
        
        $totalData = Category::count();
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
        
        if(empty($request->input('search.value'))){
            $posts = Category::offset($start)
                    ->limit($limit)
                    ->orderBy($order,$dir)
                    ->get();
            $totalFiltered = Category::count();
        }else{
            $search = $request->input('search.value');
            $category = Category::where('categoryName', 'like', "%{$search}%")
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order, $dir)
                            ->get();
            $totalFiltered = Category::where('categoryName', 'like', "%{$search}%")
                            ->count();
        }       
                    
        
        $data = array();
        
        if($category){
            foreach($category as $r){

                $nestedData['categoryName'] = $r->categoryName;
                $nestedData['categoryImage'] = '<img src="'.asset($r->categoryImage).'" alt="'.$r->categoryName.'" height="50" width="50" class=" img-rounded">';
                $nestedData['publication_status'] =$r->publication_status==1 ? 'Publish':'Unpublish';
                $nestedData['action'] = '
                    <a href="/adminpanel/category/edit/'.$r->id.'" class="btn btn-warning btn-xs">Edit</a>
                    <a href="/adminpanel/category/delete/'.$r->id.'" class="btn btn-danger btn-xs" onclick="return confirm(Are you sure to delete);">Delete</a>
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


    public function editCategory($id=null){
        $categoryById=Category::where('id',$id)->first();
        return view('admin.category.editCategory',['categoryById'=>$categoryById]);
    }

    public function updateCategory(Request $request){
        $this->validate($request,[
            'categoryName'=>'required',
        ]);
        $imageUrl=$this->imageExistStatus($request);
        $category=Category::findOrFail($request->categoryId)->first();
        $category->categoryName=$request->categoryName;
        $category->categoryImage=$imageUrl;
        $category->publication_status=$request->publication_status;
        $category->save();
        return redirect('adminpanel/category/manage')->with('message','Category info updated successfully');
    }
    private function imageExistStatus($request){
        $categoreById=Category::where('id',$request->categoryId)->first();
        $categoryImage=$request->file('categoryImage');
        if ($categoryImage){
            unlink($categoreById->categoryImage);
            $name=$categoryImage->getClientOriginalName();
            $uploadPath='productImage/';
            $categoryImage->move($uploadPath,$name);
            $imageUrl=$uploadPath.$name;
        }else{
            $imageUrl=$categoreById->categoryImage;
        }
        return $imageUrl;
    }
    public function deleteCategory($id=null){
        $category=Category::findOrFail($id);
        $category->delete();
        return redirect('adminpanel/category/manage')->with('message','Category Deleted successfully');
    }

    //view category of frontEnd
    public function viewCategory($id=null){

        $products=DB::table('products')
            ->join('subcategories','products.subcategoryId','=','subcategories.id')
            ->join('categories','subcategories.categoryId','=','categories.id')
            ->select('products.id','products.productName','products.subcategoryId','products.productPrice','products.productShortDescriptoin','products.brand','products.genericName','products.productImage','subcategories.subcategoryName')
            ->where('categories.id',$id)
            ->get();
        $subCatFromCat=subcategory::where('categoryId',$id)->get();
        $Category=Category::all();
        $subcategory=subcategory::all();

        $info=Info::where('publication_status',1)->first();
        return view('frontEnd/category/category',['products'=>$products,'Category'=>$Category,'subcategory'=>$subcategory,'info'=>$info,'subCatFromCat'=>$subCatFromCat]);
    }
}
