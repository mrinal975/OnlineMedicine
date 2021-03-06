<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\Category;
use App\User;
use App\subcategory;
use DB;
use App\Info;

class SingleProductController extends Controller
{
    public function showSingleProduct($id=null){
        $products=DB::table('products')
            ->join('subcategories','products.subcategoryId','=','subcategories.id')
            ->select('products.id','products.productName','products.subcategoryId','products.productPrice','products.productShortDescriptoin','products.type','products.brand','products.genericName','products.productImage','subcategories.subcategoryName')
            ->where('products.id',$id)
            ->get();
        $pro=product::find($id);
        $similarproduct=product::where('subcategoryId',$pro->subcategoryId)->get();
        $Category=Category::all();
        $subcategory=subcategory::all();
        $info=Info::where('publication_status',1)->first();

        return view('frontEnd.singleProduct.singleProduct',['products'=>$products,'Category'=>$Category,'subcategory'=>$subcategory,'info'=>$info,'similarproduct'=>$similarproduct]);
    }

    public function viewSubCategory($cat=null,$sub=null){

        $products=DB::table('products')
            ->join('subcategories','products.subcategoryId','=','subcategories.id')
            ->join('categories','subcategories.categoryId','=','categories.id')
            ->select('products.id','products.productName','products.subcategoryId','products.productPrice','products.productShortDescriptoin','products.brand','products.genericName','products.productImage','subcategories.subcategoryName','subcategories.categoryId')
            ->where('subcategories.id',$sub)
            ->paginate(5);
        $subCatFromCat=subcategory::where('id',$sub)->get();
        $Category=Category::all();
        $subcategory=subcategory::all();
        $catLeftMenu=Category::where('id',$cat)->first();
        $info=Info::where('publication_status',1)->first();

        return view('frontEnd/subcategory/subcategory',['products'=>$products,'Category'=>$Category,'subcategory'=>$subcategory,'info'=>$info,'subCatFromCat'=>$subCatFromCat,
            'catLeftMenu'=>$catLeftMenu,'info'=>$info]);

    }
}
