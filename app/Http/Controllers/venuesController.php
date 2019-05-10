<?php

namespace App\Http\Controllers;

use App\venue;
use Illuminate\Http\Request;

class venuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $venues->venue_id = $request['venue_id'];
        $venues->user_id = $request['user_id'];
        $venues->venuename = $request['venuename'];
        $venues->mainimg = $request['mainimg'];
        $venues->description = $request['description'];
        

         
        $venues->save();
        return view('genreformuser');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\venue  $venue
     * @return \Illuminate\Http\Response
     */
    public function show(venue $venue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\venue  $venue
     * @return \Illuminate\Http\Response
     */
    public function edit(venue $venue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\venue  $venue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, venue $venue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\venue  $venue
     * @return \Illuminate\Http\Response
     */
    public function destroy(venue $venue)
    {
        //
    }
}
