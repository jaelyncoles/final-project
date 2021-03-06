<?php

namespace App\Http\Controllers;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $userprofile = User::findOrFail($user_id);

        $users = User::whereNull('approved_at')->get();
        $venues= User::where('venue', 1);

        return view('users', compact('users'));
    }

    public function approve($user_id)
    {
        $userprofile = User::findOrFail($user_id);

        $user = User::findOrFail($user_id);
        $user->update(['approved_at' => now()]);

        return redirect()->route('admin.users.index')->withMessage('User approved successfully');
    }


    public function profile()
    {
        $profile= User::all();
    }
    public function venueprofile()
    {
        $venueprofile= User::where('venue', 1);
    }
}
