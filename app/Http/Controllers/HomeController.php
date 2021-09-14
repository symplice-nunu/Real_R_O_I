<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
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
        $house = DB::table('houses')->count();
        $stripe = DB::table('stripe')->count();
        $sold = DB::table('stripe')->sum('price');
        $invested = DB::table('houses')->sum('invested');
        $expected = DB::table('houses')->sum('price');
        $contract = DB::table('contract')->count();
        return view('home',compact('user','house','stripe','contract','sold','invested','expected'));
    }

    
}
