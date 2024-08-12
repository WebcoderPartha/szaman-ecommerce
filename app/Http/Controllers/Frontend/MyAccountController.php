<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyAccountController extends Controller
{

    public function my_account_page(){
        if (auth('web')->check()){
            return view('frontend.my-account.dashboard');
        }else{
            toastr()->error('Login is required!', 'Error!');
            return redirect()->route('user_login_page');
        }
    }

    public function view_profile(){
        if (auth('web')->check()){
            return view('frontend.my-account.profile');
        }else{
            toastr()->error('Login is required!', 'Error!');
            return redirect()->route('user_login_page');
        }
    }

    public function edit_profile(){
        if (auth('web')->check()){
            return view('frontend.my-account.edit-profile');
        }else{
            toastr()->error('Login is required!', 'Error!');
            return redirect()->route('user_login_page');
        }
    }

    public function change_password(){
        if (auth('web')->check()){
            return view('frontend.my-account.change-password');
        }else{
            toastr()->error('Login is required!', 'Error!');
            return redirect()->route('user_login_page');
        }
    }

}
