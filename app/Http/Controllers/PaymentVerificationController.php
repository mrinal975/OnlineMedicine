<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\subcategory;
use App\Info;
use App\PaymentVerification;
use App\Payment;
use App\Order;
use DB;
class PaymentVerificationController extends Controller
{
    public function finalpaymentform($id){
        $Category=Category::all();
        $subcategory=subcategory::all();
        $info=Info::where('publication_status',1)->first();
        $paymentId=$id;
        return view('frontEnd/vieworder/orderconfirmation',['Category'=>$Category,'subcategory'=>$subcategory,'info'=>$info,'paymentId'=>$paymentId]);
    }

    public function finalpaymentstore(Request $request){
         $this->validate($request,[
            'phonenumber'=>'required',
            'secretkey'=>'required',    
        ]);
        $paymentverify=new PaymentVerification();
        $paymentverify->paymentId=$request->paymentId;
        $paymentverify->Phone=$request->phonenumber;
        $paymentverify->secretkey=$request->secretkey;
        $paymentverify->save();

        $Payment=Payment::findOrFail($request->paymentId);
        $Payment->paymentStatus='confirm';
        $Payment->update();
        return redirect('/user/order')->with('message','Payment Successfully done.....');
    }
   public function receiveProduct($id=null){
        $Order=Order::findOrFail($id);
        $Order->customerStatus='confirm';
        $Order->update();
        return redirect('/user/order')->with('message','Successfully done.....');
        // Session::get('orderId');
    }
    public function orderdetails($id=null){
        $Category=Category::all();
        $subcategory=subcategory::all();
        $info=Info::where('publication_status',1)->first();
        $details=DB::table('orders')
            ->join('order_details','orders.id','=','order_details.orderId')
            ->select('order_details.productId','order_details.productName','order_details.productQuantity','order_details.productPrice')
            ->where('orders.id',$id)
            ->paginate(6);
        $total=Order::findOrFail($id);
        return view('frontEnd/vieworder/viewdetailsorder',['details'=>$details,'total'=>$total,'Category'=>$Category,'subcategory'=>$subcategory,'info'=>$info]);
    }
}
