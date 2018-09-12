<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Session;
use Auth;
use App\subcategory;
use App\Category;
use App\Shipping;
use App\Info;

class ShippingController extends Controller
{
    public function showShippingForm(){
        $Category=Category::all();
        $subcategory=subcategory::all();

        $customerid=Session::get('customerid');
        $customerById=User::where('id',$customerid)->first();
        $info=Info::where('publication_status',1)->first();
        return view('frontEnd.checkout.shippingContent',['customerById',$customerById,'Category'=>$Category,'subcategory'=>$subcategory,'info'=>$info]);
    }
    public function saveShipingInfo(Request $request){

        $this->validateData($request);
        $shipping=new Shipping();
        $shipping->fulname=$request->fulname;
        $shipping->email=$request->email;
        $shipping->address=$request->address;
        $shipping->phonenumber=$request->phonenumber;
        $shipping->districtname='';
        $shipping->save();
        $shippingid=$shipping->id;
        Session::put('shippingid',$shippingid);
        return redirect('/checkout/payment');
    }
    public function validateData($request){
        $this->validate($request,[
            'fulname'=>'required',
            'email'=>'required|email',
            'address'=>'required',
            'phonenumber'=>'required|regex:/(^01[56789]{1}[0-9]{8}$)/u',

        ]);
    }


}
