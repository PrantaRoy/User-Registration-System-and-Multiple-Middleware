<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function index()
    {

          return view( 'user.change_pass');
    }

    public function update( Request $request){

        $this->validate($request,[
            'oldpassword'=>'required',
            'password'=> 'required|confirmed'

        ]);


        $hashedPassword= Auth::user()->password;
        if (Hash::check($request->oldpassword , $hashedPassword))
        {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect()->route('login')->with('successMsg',"Password Changed Successfuly");
        } else{

            return redirect()->back()->with('errorMsg'," Current Password Invalid");
        }

    }
}
