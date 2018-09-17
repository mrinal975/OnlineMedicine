<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Order;
use Illuminate\Support\Facades\Session;
class OrderManage extends Controller
{
    public function viewnewOrder(){

        $newOrder=DB::table('orders')
            ->join('shippings','orders.shippingId','=','shippings.id')
            ->select('shippings.fulname','shippings.phonenumber','orders.orderTotal','orders.ordercode','orders.id','orders.created_at','orders.buytotal')
            ->where('orderStatus','pending')
            ->orderBy('orders.id', 'DESC')
            ->paginate(6);
        //return $newOrder;
        return view('admin.order.newOrder',['newOrder'=>$newOrder]);
    }
    public function deliveringOrder($id=null){
        $deliver=Order::find($id);
        $deliver->orderStatus='delivered';
        $deliver->update();
        return redirect('adminpanel/new/order')->with('message',' Order Delivered Successfully');;
    }
    public function devilered(){
        $delivered=DB::table('orders')
            ->join('shippings','orders.shippingId','=','shippings.id')
            ->select('shippings.fulname','shippings.phonenumber','orders.orderTotal','orders.ordercode','orders.id','orders.ordercode','orders.created_at','orders.buytotal')
            ->where('orderStatus','delivered')
            ->orderBy('orders.id', 'DESC')
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
    
    public function cancelsell($id=null){
        $ordeerdelete=Order::find($id);
        $ordeerdelete->delete();
        return redirect('adminpanel/delivered/order')->with('message','Order Canceled Successfully');
    }
    public function cancelorder($id=null){
        $ordeerdelete=Order::find($id);
        $ordeerdelete->delete();
        return redirect('adminpanel/new/order')->with('message','Order Canceled Successfully');
    }

    public function detailorderview($id=null){
        $details=DB::table('orders')
            ->join('order_details','orders.id','=','order_details.orderId')
            ->join('products','order_details.productId','=','products.id')
            ->select('order_details.productId','order_details.productName','order_details.productQuantity','order_details.productPrice','products.productBought')
            ->where('orders.id',$id)
            ->paginate(6);
        $shippingID=Order::where('id','=',$id)->first();
        $shipping=DB::table('orders')
            ->join('shippings','orders.shippingId','=','shippings.id')
            ->select('shippings.fulname','shippings.email','shippings.address','shippings.phonenumber')
            ->where('orders.shippingId',$shippingID->shippingId)
            ->first();
        $paymentinfo=DB::table('orders')
            ->join('payments','payments.orderId','=','orders.id')
            ->select('payments.paymentType','payments.paymentStatus','payments.id')
            ->where('orders.id',$id)
            ->first();
            $data=0;
            $total=Order::findOrFail($id);
            if($paymentinfo->paymentStatus=='confirm'){
                $payment_verifications=DB::table('payments')
                    ->join('payment_verifications','payments.id','=','payment_verifications.paymentId')
                    ->select('payment_verifications.secretkey','payment_verifications.Phone')
                    ->where('payments.id',$paymentinfo->id)
                    ->first();
                    $data=0;
                    $data=1;
            return view('admin.order.viewOrder',['details'=>$details,'total'=>$total,'shipping'=>$shipping,'paymentinfo'=>$paymentinfo,'data'=>$data,'payment_verifications'=>$payment_verifications]);
            }else{
                    $data=2;
            }
        

        return view('admin.order.viewOrder',['details'=>$details,'total'=>$total,'shipping'=>$shipping,'paymentinfo'=>$paymentinfo,'data'=>$data]);
    }
    public function detailsellview($id=null){
        $details=DB::table('orders')
            ->join('order_details','orders.id','=','order_details.orderId')
            ->join('products','order_details.productId','=','products.id')
            ->select('order_details.productId','order_details.productName','order_details.productQuantity','order_details.productPrice','products.productBought')
            ->where('orders.id',$id)
            ->paginate(6);
        $shippingID=Order::where('id','=',$id)->first();
        $shipping=DB::table('orders')
            ->join('shippings','orders.shippingId','=','shippings.id')
            ->select('shippings.fulname','shippings.email','shippings.address','shippings.phonenumber')
            ->where('orders.shippingId',$shippingID->shippingId)
            ->first();
        $paymentinfo=DB::table('orders')
            ->join('payments','payments.orderId','=','orders.id')
            ->select('payments.paymentType','payments.paymentStatus','payments.id')
            ->where('orders.id',$id)
            ->first();
            $data=0;
            $total=Order::findOrFail($id);
            if($paymentinfo->paymentStatus=='confirm'){
                $payment_verifications=DB::table('payments')
                    ->join('payment_verifications','payments.id','=','payment_verifications.paymentId')
                    ->select('payment_verifications.secretkey','payment_verifications.Phone')
                    ->where('payments.id',$paymentinfo->id)
                    ->first();
                    $data=0;
                    $data=1;
            return view('admin.order.deliveredOrderDetails',['details'=>$details,'total'=>$total,'shipping'=>$shipping,'paymentinfo'=>$paymentinfo,'data'=>$data,'payment_verifications'=>$payment_verifications]);
            }else{
                    $data=2;
            }
        

        return view('admin.order.deliveredOrderDetails',['details'=>$details,'total'=>$total,'shipping'=>$shipping,'paymentinfo'=>$paymentinfo,'data'=>$data]);
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

    public function datewisedata(){
        $date = date('Y-m-d');
        $data=Order::whereDate('created_at', '=',$date)
                    ->where('orderStatus','delivered')->get();
        return view('admin.order.dailysell',['data'=>$data]);
        
    }
    public function datefilter($page=null){
        $pass=0;
        if (isset($_GET['page'])) {
            $fromDate=Session::get('fromDate');
            $toDate=Session::get('toDate');
            $data = Order::whereRaw("created_at >= ? AND created_at <= ?", 
                array($fromDate,$toDate)
            )
            ->where('orderStatus','delivered')
            ->orderBy('id','DESC')
            ->paginate(10);
            $pass=1;
            return view('admin.datefilter.datefilter',['data'=>$data,'pass'=>$pass]);
        }
        return view('admin.datefilter.datefilter',['pass'=>$pass]);
        
    }
    public function datefilterdata(Request $request){

        $fromDate = $request->fromdate;
        $order=Order::find(42);
        $toDate   =$request->todate;
        $hidden=$request->hidden;
        if ($fromDate!=null) {
            $fromDate = date("Y-m-d", strtotime($fromDate));
            Session::put('fromDate',$fromDate);
            $toDate = date("Y-m-d", strtotime($toDate));
            Session::put('toDate',$toDate);
            if($toDate==null){
                $toDate=$date = date('Y-m-d');
            }

            $data = Order::whereRaw("created_at >= ? AND created_at <= ?", 
                array($fromDate.' 00:00:00',$toDate.' 23:59:59')
            )
            ->where('orderStatus','delivered')
            ->orderBy('id','DESC')
            ->paginate(10);
            $pass=1;
            return view('admin.datefilter.datefilter',['data'=>$data,'pass'=>$pass]);
        }else{
            return redirect('adminpanel/datefilter')->with('message','input from date');
        }

    }
}
