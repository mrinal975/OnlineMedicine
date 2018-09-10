<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\product;
use App\Category;
use App\subcategory;
use App\Info;
class CartController extends Controller
{
    public function updateTax(){
        Cart::tax();
    }

    public function addToCart(Request $request){
        //$productId=new Product();
        $id=$request->id;
        $productById=Product::findOrFail($id);

        Cart::add([
            'id'=>$id,
            'name'=>$productById->productName,
            'price'=>$productById->productPrice,
            'qty'=>1,
        ]);
        $data=Cart::count();
        return response()->json($data);

    }

    public function deleteCartProduct($id){
        Cart::remove($id);
        return redirect()->back();
    }

    public function showCart(){
        $Category=Category::all();
        $subcategory=subcategory::all();
        $publishedCategory=Category::all();
        $cartProduct=Cart::content();
        $info=Info::where('publication_status',1)->first();
        return view('frontEnd.cart.showCart',compact('cartProduct'),['publishedCategory'=>$publishedCategory,'Category'=>$Category,'subcategory'=>$subcategory,'info'=>$info]);
    }

    public function QuantityUpdate(Request $request,$id){
        Cart::update($id,['qty'=>$request->qty]);
        return back();
    }
}
