<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserLoginController extends Controller
{

    public function user_login_page(){
        return view('frontend.auth.login');
    }

    public function user_forget_password(){
        return view('frontend.auth.forget-password');
    }

    public function customer_register(Request $request){

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->status = 1;
        $user->save();

        Auth::guard('web')->login($user);

        return response()->json(Auth::guard('web')->user(), 200);
    }

    

}
