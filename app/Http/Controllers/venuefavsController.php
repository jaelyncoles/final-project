<?php

namespace App\Http\Controllers;

use App\venuefav;
use Illuminate\Http\Request;

class venuefavsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
     * @param  \App\venuefav  $venuefav
     * @return \Illuminate\Http\Response
     */
    public function show(venuefav $venuefav)
    {
        // get current auth user
        $venuefavs= userfav::with(array('User'=>function ($query) {
            $query->where('Users.venue', 1);
        }))
        ->orderBy('user_id')->get();
        
        // where('user_id');
        //$venues = User::where('venue', 1)->get();

        return view('favorites', compact('$venuefavs)'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\venuefav  $venuefav
     * @return \Illuminate\Http\Response
     */
    public function edit(venuefav $venuefav)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\venuefav  $venuefav
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, venuefav $venuefav)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\venuefav  $venuefav
     * @return \Illuminate\Http\Response
     */
    public function destroy(venuefav $venuefav)
    {
        //
    }   

    // public function venuefavs()
    // {
    //     // get current auth user
    //     $venuefavs= userfav::with(array('User'=>function ($query) {
    //         $query->where('Users.venue', 1);
    //     }))
    //     ->orderBy('user_id')->get();
        
    //     // where('user_id');
    //     //$venues = User::where('venue', 1)->get();

    //     return view('favorites', compact('$venuefavs)'));
    // }
}
