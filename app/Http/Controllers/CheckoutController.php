<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Auth;
use Cart;
use App\Category;
use App\subcategory;
use App\Info;
class CheckoutController extends Controller
{
    public function index(){

        if(Auth::check()){
            return redirect('/checkout/shipping');
        }
        $Category=Category::all();
        $subcategory=subcategory::all();
        $info=Info::where('publication_status',1)->first();
        return view('frontEnd.checkout.checkoutContent',['Category'=>$Category,'subcategory'=>$subcategory,'info'=>$info]);
    }


}
