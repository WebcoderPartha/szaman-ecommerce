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

    public function customer_login(Request $request){
        $login = $request->input('login_email_phone');
        $password = $request->input('login_password');

        // Attempt to log in using email or mobile number
        if (Auth::guard('web')->attempt(['email' => $login, 'password' => $password]) ||
            Auth::guard('web')->attempt(['phone' => $login, 'password' => $password])) {
            return response()->json(['success' => 'Login success!'], 200);
        }else {
            return response()->json(['error' => 'Invalid credentials!']);
        }

    }

    public function customer_logout(){
        Auth::guard('web')->logout();
        toastr()->success('Logout successfully!', 'Success');
        return redirect()->route('frontend.home_page');
    }

    public function update_customer_address(Request $request){
        $user = User::find(Auth::guard('web')->user()->id);
        $user->address_line_one = $request->address_line_one;
        $user->post_office = $request->post_office;
        $user->thana = $request->thana;
        $user->postal_code = $request->postal_code;
        $user->district = $request->district;
        $user->save();
        return response()->json(['success' => 'Address updated!'], 200);
    }

}
