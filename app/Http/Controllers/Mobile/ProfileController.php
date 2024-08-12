<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfileController extends Controller
{

    public function password_update(Request $request){
        $user = User::find($request->user_id);
        $user->password = Hash::make($request->password);
        $user->save();
        return response()->json(['success' => 'Password has been updated!'], 200);
    }

}
