<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Order;
use Illuminate\Support\Facades\Session;
class DynamicPDFController extends Controller
{
    //

    function get_sell_data()
    {
    	$fromDate=Session::get('fromDate');
        $toDate=Session::get('toDate');
        $sell_data = Order::whereRaw("created_at >= ? AND created_at <= ?", 
			            array($fromDate,$toDate)
				        )
				        ->where('orderStatus','delivered')
				        ->orderBy('id','DESC')
				        ->get();

     return $sell_data;
    }

    function pdf()
    {
	     $pdf = \App::make('dompdf.wrapper');
	     $pdf->loadHTML($this->convert_sell_data_to_html());
	     return $pdf->stream();
    }

    function convert_sell_data_to_html()
    {
	     $sell_data = $this->get_sell_data();
	     $output = '

	     <h3 align="center">Sell  Information From '.date('Y M j',strtotime(Session::get('fromDate'))).' To '.date('Y M j',strtotime(Session::get('toDate'))).' </h3>
	     <table width="100%" style="border-collapse: collapse; border: 0px;">
	      <tr>
	    <th style="border: 1px solid; padding:12px;" width="20%">Index</th>
	    <th style="border: 1px solid; padding:12px;" width="30%">order Code</th>
	    <th style="border: 1px solid; padding:12px;" width="15%">Order Total</th>
	    <th style="border: 1px solid; padding:12px;" width="15%">Buy Total</th>
	    <th style="border: 1px solid; padding:12px;" width="20%">Profit</th>
	   </tr>
	     ';  
	     $i=1; $totalProfit=0; $totalCost=0;
	     foreach($sell_data as $data)
	     {
		      $output .= '
		      <tr>
		       <td style="border: 1px solid; padding:12px;">'.$i.'</td>
		       <td style="border: 1px solid; padding:12px;">'.$data->ordercode.'</td>
		       <td style="border: 1px solid; padding:12px;">'.$data->orderTotal.'</td>
		       <td style="border: 1px solid; padding:12px;">'.$data->buytotal.'</td>
		       <td style="border: 1px solid; padding:12px;">'.$profit=$data->orderTotal-$data->buytotal.'</td>
		      </tr>
		      '; 
		       $totalProfit=$totalProfit+round($profit);;
               $totalCost=$totalCost+round($data->buytotal);
	     }
	     $output .= '</table>
	     			<h4 class="text-center">Total investment :'.$totalCost.' Total Profit: '.$totalProfit.'</h4';

	     return $output;
    }
}
