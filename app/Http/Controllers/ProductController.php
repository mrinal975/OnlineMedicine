<?php

namespace App\Http\Controllers;
use App\product;
use Illuminate\Http\Request;
use DB;
use App\subcategory;

class ProductController extends Controller
{
    public function createProduct(){
        $subcategory= subcategory::all();
        return view('admin.product.createproduct',['subcategory'=>$subcategory]);
    }
    public function storeProduct(Request $request){
        $this->validate($request,[
            'productName'=>'required|max:180',
            'subcategoryId'=>'required',
            'productBought'=>'required',
            'productPrice'=>'required|numeric',
            'productQuantity'=>'required|numeric',
            'productShortDescriptoin'=>'required|max:180',
            'type'=>'required',
            'brand'=>'required',
            'publication_status'=>'required',
            'productImage'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);
        $productImage=$request->file('productImage');
        $name=$productImage->getClientOriginalName();
        $uploadPath='productImage/';
        $imageUrl=$uploadPath.$name;
        $productImage->move($uploadPath,$name);

        $this->saveProductionInfo($request,$imageUrl);

        return redirect('adminpanel/product/add')->with('message','Product Info Saved Successfully');
    }

    public function saveProductionInfo($request,$imageUrl){

        $product=new Product();
        $product->productName=$request->productName;
        $product->subcategoryId=$request->subcategoryId;
        $product->productBought=$request->productBought;
        $product->productPrice=$request->productPrice;
        $product->productQuantity=$request->productQuantity;
        $product->productShortDescriptoin=$request->productShortDescriptoin;
        $product->productShortDescriptoin=$request->productShortDescriptoin;
        $product->type=$request->type;
        $product->brand=$request->brand;
        $product->genericName=$request->genericName;
        
        if( empty($product->genericName) || $product->genericName==null){
            $product->genericName='';
        }
        $product->productImage=$imageUrl;
        $product->publication_status=$request->publication_status;
        $product->save();

    }

    public function manageProduct(){
        return view('admin.product.manageproduct');
    }
    public function editProduct($id=null){
        $productById= product::where('id',$id)->first();
        $subcategory=subcategory::all();
        return view('admin.product.editproduct',['subcategory'=>$subcategory,'productById'=>$productById]);
    }
    public function viewProduct($id=null){
        $productById= product::where('id',$id)->first();
        $subcategory=subcategory::all();
        return view('admin.product.viewproduct',['subcategory'=>$subcategory,'productById'=>$productById]);
    }
    public function updateProduct(Request $request){
        $this->validate($request,[
            'productName'=>'required',
            'subcategoryId'=>'required',
            'productBought'=>'required',
            'productPrice'=>'required|numeric',
            'productQuantity'=>'required|numeric',
            'productShortDescriptoin'=>'required',
            'type'=>'required',
            'brand'=>'required',
            'genericName'=>'required',
            'publication_status'=>'required',

        ]);

        $imageUrl=$this->imageExistStatus($request);
        $productById=Product::where('id',$request->productId)->first();
        $productById->productName=$request->productName;
        $productById->subcategoryId=$request->subcategoryId;
        $productById->productBought=$request->productBought;
        $productById->productPrice=$request->productPrice;
        $productById->productQuantity=$request->productQuantity;
        $productById->productShortDescriptoin=$request->productShortDescriptoin;
        $productById->type=$request->type;
        $productById->brand=$request->brand;
        $productById->genericName=$request->genericName;
        $productById->productImage=$imageUrl;
        $productById->publication_status=$request->publication_status;
        $productById->save();
        return redirect('adminpanel/product/manage')->with('message','Product info updated successfully');



    }
    private function imageExistStatus($request){
        $productById=Product::where('id',$request->productId)->first();
        $productImage=$request->file('productImage');
        if ($productImage){
            unlink($productById->productImage);
            $name=$productImage->getClientOriginalName();
            $uploadPath='productImage/';
            $productImage->move($uploadPath,$name);
            $imageUrl=$uploadPath.$name;
        }else{
            $imageUrl=$productById->productImage;
        }
        return $imageUrl;
    }
    public function deleteProduct($id=null){
        $productDeleteById=Product::findOrFail($id);
        unlink($productDeleteById->productImage);
        $productDeleteById->delete();
        return redirect('adminpanel/product/manage')->with('message','Product info Deleted successfully');
    }



           //Process for data Table
    public  function processProduct(Request $request){
        $product= product::all();
        $columns = array(
            0 => 'productName',
            1 => 'subcategoryId',
            2 => 'productBought',
            3 => 'productPrice',
            4 => 'productQuantity',
            5 => 'action'
        );
        
        $totalData = product::count();
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
        
        if(empty($request->input('search.value'))){
            $posts = product::offset($start)
                    ->limit($limit)
                    ->orderBy($order,$dir)
                    ->get();
            $totalFiltered = product::count();
        }else{
            $search = $request->input('search.value');
            $product = product::where('productQuantity', 'like', "%{$search}%")
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order, $dir)
                            ->get();
            $totalFiltered = product::where('productQuantity', 'like', "%{$search}%")
                            ->count();
        }       
                    
        
        $data = array();
        $subcategory=subcategory::all();
        if($product){
            foreach($product as $r){
                $nestedData['productName'] = $r->productName;
                foreach($subcategory as $subcat){
                    if($r->subcategoryId==$subcat->id){
                        $nestedData['subcategoryId'] = $subcat->subcategoryName;        
                    }
                }
                $nestedData['productBought'] = $r->productBought;
                $nestedData['productPrice'] = $r->productPrice;
                $nestedData['productQuantity'] = $r->productQuantity;
                //class="btn btn-sm btn-primary"
                $nestedData['action'] = '
                    <a href="/adminpanel/product/edit/'.$r->id.'" class="btn btn-xs btn-warning" title="Edit Product"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    <a href="/adminpanel/product/view/'.$r->id.'" class="btn btn-xs btn-success" title="View Product"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    <a href="/adminpanel/product/delete/'.$r->id.'" class="btn btn-xs btn-danger" onclick="return confirm(Are you sure to delete);" title="Delete Product"><i class="fa fa-trash" aria-hidden="true"></i></a>
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

    // $subcategory= subcategory::all();
    // $columns = array(
    //         0 => 'productName',
    //         1 => 'subcategoryId',
    //         2 => 'productBought',
    //         3 => 'productPrice',
    //         4 => 'productQuantity',
    //         5 => 'action'
    // );
        
    //     $totalData = product::count();
    //     $limit = $request->input('length');
    //     $start = $request->input('start');
    //     $order = $columns[$request->input('order.0.column')];
    //     $dir = $request->input('order.0.dir');
        
    //     if(empty($request->input('search.value'))){
    //         $posts = product::offset($start)
    //                 ->limit($limit)
    //                 ->orderBy($order,$dir)
    //                 ->get();
    //         $totalFiltered = product::count();
    //     }else{
    //         $search = $request->input('search.value');
    //         $product = product::where('productName', 'like', "%{$search}%")
    //                         ->orWhere('productQuantity','like',"%{$search}%")
    //                         ->offset($start)
    //                         ->limit($limit)
    //                         ->orderBy($order, $dir)
    //                         ->get();
    //         $totalFiltered = product::where('productName', 'like', "%{$search}%")
    //                         ->orWhere('productQuantity','like',"%{$search}%")
    //                         ->count();
    //     }       
                    
        
    //     $data = array();

    //     $subcategory=subcategory::all();
    //     if($product){
    //         foreach($product as $r){
    //             $nestedData['productName'] = $r->productName;
    //             foreach($subcategory as $subcat){
    //                 if($r->subcategoryId==$subcat->id){
    //                     $nestedData['subcategoryId'] = $subcat->subcategoryName;        
    //                 }
    //             }
    //             $nestedData['productBought'] = $r->productBought;
    //             $nestedData['productPrice'] = $r->productPrice;
    //             $nestedData['productQuantity'] = $r->productQuantity;
    //             //class="btn btn-sm btn-primary"
    //             $nestedData['action'] = '
    //                 <a href="/adminpanel/product/edit/'.$r->id.'" class="btn btn-xs btn-warning" title="Edit Product"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
    //                 <a href="/adminpanel/product/view/'.$r->id.'" class="btn btn-xs btn-success" title="View Product"><i class="fa fa-eye" aria-hidden="true"></i></a>
    //                 <a href="/adminpanel/product/delete/'.$r->id.'" class="btn btn-xs btn-danger" onclick="return confirm(Are you sure to delete);" title="Delete Product"><i class="fa fa-trash" aria-hidden="true"></i></a>
    //             ';
    //             $data[] = $nestedData;
    //         }
    //     }
        
    //     $json_data = array(
    //         "draw"          => intval($request->input('draw')),
    //         "recordsTotal"  => intval($totalData),
    //         "recordsFiltered" => intval($totalFiltered),
    //         "data"          => $data
    //     );
        
    //     echo json_encode($json_data);
    }
}
