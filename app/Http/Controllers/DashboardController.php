<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = DB::table('users')->count();
        $house = DB::table('products')->count();
        $stripe = DB::table('stripe')->count();
        $sold = DB::table('stripe')->sum('price');
        $invested = DB::table('products')->sum('invested');
        $expected = DB::table('products')->sum('price');
        $contract = DB::table('contract')->count();
        return view('dashboard',compact('user','house','stripe','contract','sold','invested','expected'));
    }

    
}
