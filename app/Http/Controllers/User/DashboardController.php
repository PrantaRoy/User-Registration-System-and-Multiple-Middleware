<?php

namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){

        $profile = auth()->user()->profile;
        $user = auth()->user();

        return view('user.dashboard',compact('user','profile'));
    }


}
