<?php

namespace App\Http\Controllers;

use App\venuepost;
use Illuminate\Http\Request;

class venuepostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        
            
            return view('venueprofile');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\venuepost  $venuepost
     * @return \Illuminate\Http\Response
     */
    public function show(venuepost $venuepost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\venuepost  $venuepost
     * @return \Illuminate\Http\Response
     */
    public function edit(venuepost $venuepost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\venuepost  $venuepost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, venuepost $venuepost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\venuepost  $venuepost
     * @return \Illuminate\Http\Response
     */
    public function destroy(venuepost $venuepost)
    {
        //
    }
}
