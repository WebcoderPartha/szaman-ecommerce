<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;

class MyAccountController extends Controller
{

    public function my_account_page(){
        if (auth('web')->check()){
            $orders = Order::where('user_id', auth('web')->user()->id)->orderBy('id', 'asc')->get();
            return view('frontend.my-account.dashboard', compact('orders'));
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
            $profile = User::find(auth('web')->user()->id);
            return view('frontend.my-account.edit-profile', compact('profile'));
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
