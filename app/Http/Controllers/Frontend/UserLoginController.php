<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserLoginController extends Controller
{

    public function user_login_page(){
        return view('frontend.auth.login');
    }

}
