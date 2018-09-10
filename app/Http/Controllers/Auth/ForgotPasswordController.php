<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\Category;
use App\subcategory;
use App\Info;
class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
     public function showLinkRequestForm()
    {   
        $Category=Category::all();
        $subcategory=subcategory::all();
        $publishedCategory=Category::all();
        $info=Info::where('publication_status',1)->first();

        return view('frontEnd.resetpassword.resetpassword',['Category'=>$Category,'subcategory'=>$subcategory,'info'=>$info]);
    }
}
