<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\Category;
use App\User;
use App\subcategory;
use App\Order;
use DB;
use App\Info;
use App\Prescription;
use Session;
use Auth;
class WellcomeController extends Controller
{
    public function  index(){
        $products=product::where('publication_status',1)->get();
        $Category=Category::all();
        $subcategory=subcategory::all();
        $info=Info::where('publication_status',1)->first();

        return view('frontEnd.home.homeContent',['products'=>$products,'Category'=>$Category,'subcategory'=>$subcategory,'info'=>$info]);
    }

    public function viewCustomerOrder(){
        $Category=Category::all();
        $subcategory=subcategory::all();
        $info=Info::where('publication_status',1)->first();
        $id=Session::get('customerid');
        if ($id==null) {
            $id=Auth::user()->id;
        }
        if ($id!=null) {
             $newOrder=DB::table('orders')
            ->join('shippings','orders.shippingId','=','shippings.id')
            ->join('payments','orders.id','=','payments.orderId')
            ->select('shippings.fulname','shippings.phonenumber','orders.orderTotal','orders.customerStatus','orders.ordercode','orders.created_at','orders.orderStatus','payments.orderId','payments.paymentType','payments.id','payments.paymentStatus')
            ->where('orders.customerId',$id)
            ->orderBy('orders.id', 'DESC')
            ->paginate(6);
        }
        return view('frontEnd.vieworder.vieworder',['Category'=>$Category,'subcategory'=>$subcategory,'info'=>$info,'newOrder'=>$newOrder]);
    }

    public function category(){
        $products=product::where('publication_status',1)->get();
        $Category=Category::all();
        $subcategory=subcategory::all();
        $info=Info::where('publication_status',1)->first();
        return view('frontEnd.category.category',['products'=>$products,'Category'=>$Category,'subcategory'=>$subcategory,'info'=>$info]);
    }

    public function about(){
        $products=product::where('publication_status',1)->get();
        $Category=Category::all();
        $subcategory=subcategory::all();
        $info=Info::where('publication_status',1)->first();
        return view('frontEnd.about-us.about',['products'=>$products,'Category'=>$Category,'subcategory'=>$subcategory,'info'=>$info]);
    }
    public function news(){
        $products=product::where('publication_status',1)->get();
        $Category=Category::all();
        $subcategory=subcategory::all();
        $info=Info::where('publication_status',1)->first();
        return view('frontEnd.news.news',['products'=>$products,'Category'=>$Category,'subcategory'=>$subcategory,'info'=>$info]);
    }
    public function contact(){
        $products=product::where('publication_status',1)->get();
        $Category=Category::all();
        $subcategory=subcategory::all();
        $info=Info::where('publication_status',1)->first();
        return view('frontEnd.contact.contact',['products'=>$products,'Category'=>$Category,'subcategory'=>$subcategory,'info'=>$info]);
    }

    public function howorder(){
        $products=product::where('publication_status',1)->get();
        $Category=Category::all();
        $subcategory=subcategory::all();
        $info=Info::where('publication_status',1)->first();
        return view('frontEnd.how-to-order.how-to-order',['products'=>$products,'Category'=>$Category,'subcategory'=>$subcategory,'info'=>$info]);
    }

    public function policy(){
        $products=product::where('publication_status',1)->get();
        $Category=Category::all();
        $subcategory=subcategory::all();
        $info=Info::where('publication_status',1)->first();
        return view('frontEnd.policy.policy',['products'=>$products,'Category'=>$Category,'subcategory'=>$subcategory,'info'=>$info]);
    }

    public function prescription(){
        $products=product::where('publication_status',1)->get();
        $Category=Category::all();
        $subcategory=subcategory::all();
        $info=Info::where('publication_status',1)->first();
        return view('frontEnd.prescription-upload.prescription-upload',['products'=>$products,'Category'=>$Category,'subcategory'=>$subcategory,'info'=>$info]);
    }

    public function login(){
        return view('frontEnd.login.login');
    }

    public function admin(){
        $products=product::all();
        $user = User::all();
        $products = is_array($products)?count($products):0;
        $user = is_array($products)?count($products):0;
        $prescription=prescription::where('prescriptionStatus','0')->get();
        $prescriptionCount=count($prescription);
        $order=Order::where('orderStatus','pending')->get();
        $order=count($order);
        $sell=Order::where('orderStatus','delivered')->get();
        $sell=count($sell);
        return view('admin.home.home',['products'=>$products,'user'=>$user,'prescriptionCount'=>$prescriptionCount,'order'=>$order,'sell'=>$sell]);
    }

    public function pagenotfound(){
        $Category=Category::all();
        $subcategory=subcategory::all();
        $info=Info::where('publication_status',1)->first();
        return view('frontEnd.error',['Category'=>$Category,'subcategory'=>$subcategory,'info'=>$info]);
    }
    public function uniquerandom(){
        do{
         $random=random_int(0,1);
        }
        while (Order::where('ordercode', '=',$random)->exists());
    }
    public function datewisedata(){
        $date = date('Y-m-d');
        //$reservations = Reservation::whereBetween('reservation_from', array($from, $to))->get();
        // $data=Order::whereBetween('created_at',array('2018-09-10 ','2018-09-16')->get();
                    // ->where('orderStatus','delivered')->get();
        
     
        $date = date('Y-m-d');
        $data=Order::whereDate('created_at', '=',$date)
                ->where('orderStatus','delivered')->get();
        
        $fromDate = "2018-9-11";
        $toDate   = "2018-9-16";

        $reservations = Order::whereRaw("created_at >= ? AND created_at <= ?", 
            array($fromDate,$toDate)
        )
        ->where('orderStatus','delivered')
        ->get();
        dd($reservations);
    }

}
