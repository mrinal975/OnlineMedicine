<?php

namespace App\Http\Controllers;
use App\Order;
use App\Payment;
use App\OrderDetail;
use Illuminate\Http\Request;
use Cart;
use Illuminate\Support\Facades\Session;
use App\Category;
use App\subcategory;
use App\Info;
class PaymentController extends Controller
{
    public function showPaymentForm(){
        $Category=Category::all();
        $subcategory=subcategory::all();
        $info=Info::where('publication_status',1)->first();
        return view('frontEnd.payment.paymentContent',['Category'=>$Category,'subcategory'=>$subcategory,'info'=>$info]);
    }
    public function saveOrderInfo(Request $request){
        $this->validate($request,[
            'paymentType'=>'required',
        ]);
        $Category=Category::all();
        $subcategory=subcategory::all();
        $paymentType=$request->paymentType;
        $info=Info::where('publication_status',1)->first();
        if($paymentType=='cashOnDelivery'){

            $order=new Order();
            $order->customerId=Session::get('customerid');
            $order->shippingId=Session::get('shippingid');
            $order->orderTotal=Session::get('orderTotal');
            $order->orderStatus='pending';
            //return $order->customerId.$order->shippinhId.$order->orderTotal;
            $order->save();

            $orderId=$order->id;
            Session::put('orderId',$orderId);

            $payment=new Payment();
            $payment->orderId=Session::get('orderId');
            $payment->paymentType=$request->paymentType;
            $payment->save();

            $orderDetail=new OrderDetail();
            $cartProducts=Cart::content();
            foreach ($cartProducts as $cartProduct){
                $orderDetail->orderId=Session::get('orderId');
                $orderDetail->productId=$cartProduct->id;
                $orderDetail->productName=$cartProduct->name;
                $orderDetail->productPrice=$cartProduct->price;
                $orderDetail->productQuantity=$cartProduct->qty;
                $orderDetail->save();

            }
            Cart::destroy();
            $message="We will process the order soon";
            return redirect('/checkout/my-home')->with('message',$message);
        }else if($paymentType=='bkash'){
            $message="<stronhg>01515298780</stronhg> is for bkash .within 30min you need to send money for confirm your purchase";
            return view('frontEnd/payment/paymentConfirmed',['Category'=>$Category,'subcategory'=>$subcategory,'info'=>$info])->with('message',$message);
//            return "Under construction bakash payment.Please use cash on delivery";
        }else if($paymentType='paypal'){
            $message="<stronhg>01515298780</stronhg> is for Rocket .within 30min you need to send money for confirm your purchase";
            return view('frontEnd/payment/paymentConfirmed',['Category'=>$Category,'subcategory'=>$subcategory,'info'=>$info])->with('message',$message);
        }
    }
    public function paymentConfired(){
        $Category=Category::all();
        $subcategory=subcategory::all();
        $message="";
        $info=Info::where('publication_status',1)->first();
        return view('frontEnd/payment/paymentConfirmed',['Category'=>$Category,'subcategory'=>$subcategory,'info'=>$info])->with('message',$message);
    }

}
