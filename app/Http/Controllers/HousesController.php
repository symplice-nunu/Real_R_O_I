<?php

namespace App\Http\Controllers;

use App\Models\Houses;
use Illuminate\Http\Request;

class HousesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $houses = Houses::latest()->paginate(5);
    
        return view('houses.houseslist',compact('houses'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('houses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'houseid' => 'required',
            'houselocation' => 'required',
            'price' => 'required',
        ]);
        Houses::create($request->all());
     
        return redirect()->route('houses.index')
                        ->with('success','House Added successfully.');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Houses  $houses
     * @return \Illuminate\Http\Response
     */
    public function show(Houses $houses)
    {
        return view('houses.show',compact('houses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Houses  $houses
     * @return \Illuminate\Http\Response
     */
    public function edit(Houses $houses)
    {
        return view('houses.edit',compact('houses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Houses  $houses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Houses $houses)
    {
                        $request->validate([
                            'houseid' => 'required',
                            'houselocation' => 'required',
                            'price' => 'required',
                        ]);
                    
                        $houses->update($request->all());
                    
                        return redirect()->route('houses.index')
                                        ->with('success','House updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Houses  $houses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Houses $houses)
    {
        $houses->delete();
    
        return redirect()->route('houses.index')
                        ->with('success','House deleted successfully');
    }
}
