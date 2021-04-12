<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController
{

    public function index()
    {
        // $user = Auth::user();
        // dd($user);
        return view('home');
    }
}
