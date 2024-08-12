<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyAccountController extends Controller
{

    public function my_account_page(){
        if (auth('web')->check()){
            return view('frontend.my-account');
        }else{
            toastr()->error('Login is required!', 'Error!');
            return redirect()->route('user_login_page');
        }
    }

}
