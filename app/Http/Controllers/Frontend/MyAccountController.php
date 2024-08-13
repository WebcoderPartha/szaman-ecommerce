<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

    public function update_edit_profile(Request $request, $user_id){
        $validated = $request->validate([
            'phone' => 'required|unique:users,phone,'.$user_id,
            'email' => 'required|unique:users,email,'.$user_id,
        ]);

        $user = User::find($user_id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->save();

        toastr()->success('Profile is updated!', 'Success!');
        return redirect()->back();
    }

    public function update_password(Request $request, $user_id){
        $validated = $request->validate([
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required'
        ]);

        $user = User::find($user_id);
        $user->password = Hash::make($request->password);
        $user->save();

        toastr()->success('Password is updated!', 'Success!');
        return redirect()->back();
    }


}
