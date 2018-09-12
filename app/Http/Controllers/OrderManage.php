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
            ->paginate(2);
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
            ->paginate(6);
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

    public function detailview($id){
        $detailview=DB::table('orders')
            ->join('shippings','orders.shippingId','=','shippings.id')
            ->join('order_details','orders.id','=','order_details.orderId')
            ->join('products','products.id','=','order_details.productId')
            ->select('shippings.fulname','shippings.phonenumber','orders.orderTotal','orders.id','orders.created_at','order_details.productName','products.productImage')
            ->where('orders.id',$id)
            ->first();
            return view('admin.order.viewOrder',compact('detailview'));
    }




//Process for data Table
    public  function processSell(Request $request){
        //print_r($request->all()); 
        $prescription= prescription::all();
        $columns = array(
            0 => 'customerName',
            1 => 'productName',
            2 => 'phone',
            3 => 'time',
            4 => 'price',
            5 => 'action'
        );
        $delivered=DB::table('orders')
                ->join('shippings','orders.shippingId','=','shippings.id')
                ->join('order_details','orders.id','=','order_details.orderId')
                ->select('shippings.fulname','shippings.phonenumber','orders.orderTotal','orders.id','orders.created_at','order_details.productName')
                ->where('orderStatus','delivered')
                ->get();

        $totalData = count($delivered);
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
        
        if(empty($request->input('search.value'))){
            $posts = delivered::offset($start)
                    ->limit($limit)
                    ->orderBy($order,$dir)
                    ->get();
            $totalFiltered = count($delivered);
        }else{
            $search = $request->input('search.value');
                    $delivered=DB::table('orders')
                        ->join('shippings','orders.shippingId','=','shippings.id')
                        ->join('order_details','orders.id','=','order_details.orderId')
                        ->select('shippings.fulname','shippings.phonenumber','orders.orderTotal','orders.id','orders.created_at','order_details.productName')
                        ->where('orderStatus','delivered')
                        ->get();
            $delivered =DB::table('orders')
                            ->join('shippings','orders.shippingId','=','shippings.id')
                            ->join('order_details','orders.id','=','order_details.orderId')
                            ->select('shippings.fulname','shippings.phonenumber','orders.orderTotal','orders.id','orders.created_at','order_details.productName')
                            ->where('orderStatus','delivered')
                           
                            ->get();
            $totalFiltered =count($delivered);
                            
        }       
                    
        
        $data = array();
        
        if($delivered){
            foreach($delivered as $r){
                $nestedData['customerName'] = $r->fulname;
                $nestedData['productName'] = $r->productName;
                $nestedData['phone'] = $r->phonenumber;
                $nestedData['time'] = $r->created_at;
                $nestedData['price'] = $r->orderTotal;
                $nestedData['action'] = '
                    <a href="/adminpanel/prescription/view/'.$r->id.'" class="btn btn-warning btn-xs">View</a>
                    <a href="/adminpanel/prescription/delete/'.$r->id.'" class="btn btn-danger btn-xs" onclick="return confirm(Are you sure to delete);">Delete</a>
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
    
       
    }


}
