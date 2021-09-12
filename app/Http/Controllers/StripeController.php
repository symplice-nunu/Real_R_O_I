<?php

namespace App\Http\Controllers;
use App\Models\Stripee;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:houses-list', ['only' => ['index','show']]);
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stripee = Stripee::latest()->paginate(5);
    
        return view('stripee.paymentlist',compact('stripee'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    
    public function create()
    {
       
    }

    
    public function store(Request $request)
    {
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stripee  $stripe
     * @return \Illuminate\Http\Response
     */
    public function show(Stripee $stripe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stripe  $stripe
     * @return \Illuminate\Http\Response
     */
    public function edit(Stripee $stripe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stripe  $stripe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stripee $stripe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stripe  $stripe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stripee $stripe)
    {
        //
    }
}
