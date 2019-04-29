<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user_favController extends Controller
{
    public function index()
    {
        return view('user.index');
    }
}
