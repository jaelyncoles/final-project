<?php

namespace App\Http\Controllers;

use Auth;
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
        //$userprofile = User::findOrFail($user_id);

        // $venues->venue_id = $request['venue_id'];
        $img = "/images/venues/default.png";
        // if the image is not in the form, use the default
        // else upload the image and use the path and name as the $img variable
        $venues = new Venue();
        $venues->user_id = Auth::user()->id;
        $venues->venuename = $request['venuename'];

        $venues->mainimg = $img;

        if ($request->hasFile('image')) {
            $mainimg = $request->file('image');
            $name = time().'.'.$mainimg->getClientOriginalExtension();
            $destinationPath = public_path('/storage/galleryImages/');
            $img->move($destinationPath, $name);
            $venuepost->image = $destinationPath . "" . $name;
        }
        $venues->description = $request['venuedescription'];
        

         
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
