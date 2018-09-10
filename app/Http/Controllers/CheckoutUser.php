<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\User;
use Illuminate\Support\Facades\Auth;
class CheckoutUser extends Controller
{
    public function customerRegister(Request $request){
        $this->registervalidate($request);

        $customer=new User();
        $customer->name=$request->name;
        $customer->gender=$request->gender;
        $customer->email=$request->email;
        $customer->password=bcrypt($request->password);
        $customer->save();
        $customerid=$customer->id;
        Session::put('customerid',$customerid);
        return redirect('checkout/shipping');
    }
    public function registervalidate($request){
        $this->validate($request,[
            'name'=>'required',
            'gender'=>'required',
            'email'=>'required|email',
            'password'=>'required | confirmed',

        ]);
    }
    public function customerLogin(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
        ]);

        if (Auth::attempt(['email'=>$request['email'],'password'=>$request['password']])){

            Session::put('customerid',Auth::user()->id);
            return redirect('checkout/shipping');
        }
    }

}
