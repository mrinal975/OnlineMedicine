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
use App\Gateway;
use App\product;
use Auth;

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
        $Gateway=Gateway::where('publication_status',1)->first();
        
        do{
         $random=random_int(000000,999999);
        }
        while (Order::where('ordercode', '=',$random)->exists());
        $random;
        $order=new Order();
        Session::put('random',$random);

        Session::get('customerid')!=null ? $customerId=Session::get('customerid')
        :$customerId=Auth::user()->id;
        $order->customerId=$customerId;
        $order->shippingId=Session::get('shippingid');
        $order->orderTotal=Session::get('orderTotal');
        $order->ordercode=$random;
        $order->orderStatus='pending';
        //return $order->customerId.$order->shippinhId.$order->orderTotal;
        $order->save();

        $orderId=$order->id;
        Session::put('orderId',$orderId);

        $payment=new Payment();
        $payment->orderId=Session::get('orderId');
        $payment->paymentType=$request->paymentType;
        $payment->save();
       $cartProducts=Cart::content();
       $buytotal=0;
        foreach ($cartProducts as $cartProduct){
           $orderDetail=new OrderDetail();
            $orderDetail->orderId=Session::get('orderId');
            $orderDetail->productId=$cartProduct->id;
            $orderDetail->productName=$cartProduct->name;
            $orderDetail->productPrice=$cartProduct->price;
            $orderDetail->productQuantity=$cartProduct->qty;
            $orderDetail->save();
            $product=product::findOrFail($cartProduct->id);
            $buytotal=$buytotal+$product->productBought*$cartProduct->qty;
            $product->productQuantity=$product->productQuantity-$cartProduct->qty;
            $product->save();

        }
        $orderbuytotal=Order::findOrFail(Session::get('orderId'));
        $orderbuytotal->buytotal=$buytotal;
        $orderbuytotal->update();
        Cart::destroy();
        $phone='';
        $way='';
        if($paymentType=='cashOnDelivery'){           
            $message=$random." is your order code.We will process the order soon";
            return redirect('/checkout/my-home')->with('message',$message);

        }else if($paymentType=='bkash'){
            $phone=$Gateway->bkas;
        }else if($paymentType='rocket'){
            $phone=$Gateway->rocket;
        }
        $message=$random." is your order code.".$phone." is for ".$paymentType." .within 30min you need to send money for confirm your purchase";
        return redirect('/checkout/my-home')->with('message',$message);

    }
    public function paymentConfired(){
        $Category=Category::all();
        $subcategory=subcategory::all();
        $info=Info::where('publication_status',1)->first();
        return view('frontEnd/payment/paymentConfirmed',['Category'=>$Category,'subcategory'=>$subcategory,'info'=>$info]);
    }


}
