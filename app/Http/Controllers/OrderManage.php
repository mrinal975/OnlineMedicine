<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Order;
class OrderManage extends Controller
{
    public function viewnewOrder(){

        $newOrder=DB::table('orders')
            ->join('shippings','orders.shippingId','=','shippings.id')
            ->join('order_details','orders.id','=','order_details.orderId')
            ->select('shippings.fulname','shippings.phonenumber','orders.orderTotal','orders.id','orders.created_at','order_details.productName')
            ->where('orderStatus','pending')
            ->get();
        //return $newOrder;
        return view('admin.order.newOrder',['newOrder'=>$newOrder]);
    }
    public function deliveringOrder($id=null){
        $deliver=Order::find($id);
        $deliver->orderStatus='delivered';
        $deliver->update();
        //return 0;
        return redirect('adminpanel/new/order')->with('message',' Order Delivered Successfully');;
    }
    public function devilered(){
        $delivered=DB::table('orders')
            ->join('shippings','orders.shippingId','=','shippings.id')
            ->join('order_details','orders.id','=','order_details.orderId')
            ->select('shippings.fulname','shippings.phonenumber','orders.orderTotal','orders.id','orders.created_at','order_details.productName')
            ->where('orderStatus','delivered')
            ->get();
        return view('admin.order.deliveredOrder',['delivered'=>$delivered]);
    }

    public function deleteorder($id=null){
        $ordeerdelete=Order::find($id);
        $ordeerdelete->delete();
        return redirect('adminpanel/delivered/order')->with('message','Order Deleted  Successfully');;
    }
    public function viewproductinformation($id=null){
        $ordeerdetail=Order::find($id);
        //return $ordeerdetail;
        return view('admin.order.info',compact('ordeerdetail'));
    }
    public function cancelorder($id=null){
        $ordeerdelete=Order::find($id);
        $ordeerdelete->delete();
        return redirect('adminpanel/new/order')->with('message','Order Canceled Successfully');
    }


}
