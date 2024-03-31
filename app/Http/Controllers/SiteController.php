<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function login()
    {
        // $users = DB::table('users')->get();

        // $carts = DB::table('carts')->where('status', 'new')->count();
        // $carts = User::where('user_id', 'id')->get()->count();
        // $carts = DB::table('carts')->where('user_id', 'id')->get();
        // $carts = DB::table('carts')->where('user_id', 'id')->get()->count();
        return view('userlogin.login');

        // return view('base', compact('sliders', 'orders', 'users', 'categories', 'products', 'orderItems'));
    }

    public function register()
    {
        // $users = DB::table('users')->get();

        // $carts = DB::table('carts')->where('status', 'new')->count();
        // $carts = User::where('user_id', 'id')->get()->count();
        // $carts = DB::table('carts')->where('user_id', 'id')->get();
        // $carts = DB::table('carts')->where('user_id', 'id')->get()->count();
        return view('userlogin.register');

        // return view('base', compact('sliders', 'orders', 'users', 'categories', 'products', 'orderItems'));
    }
}
