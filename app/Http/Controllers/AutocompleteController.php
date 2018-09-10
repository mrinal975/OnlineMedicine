<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use DB;
class AutocompleteController extends Controller
{
    function index()
    {
        return view('autocomplete');
    }

    function fetch(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = DB::table('products')
                ->where('productName', 'LIKE', "%{$query}%")
                ->get();
            $output = '<ul class="dropdown-menu result" style="display:block; position:relative;">';
            foreach($data as $row)
            {
                $output .= '
       <li><a href="/single-Product/'.$row->id.'">'.$row->productName.'</a></li>
       ';
            }
            $output .= '</ul>';
            echo $output;
        }
    }
}
