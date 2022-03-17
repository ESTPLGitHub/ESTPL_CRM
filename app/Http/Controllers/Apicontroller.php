<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class Apicontroller extends Controller
{
    public function listusers()
    {
        $u_Details = [];
        $users = User::all(); 
        foreach($users as $user) {
            array_push($u_Details, array('name' => $user->fullname, 'email' => $user->email, 'date' => $user->created_at->format('F d, Y h:ia'), 'role' => $user->roles()->pluck('name')->implode(' ')));
        }
        return response()->json($u_Details);
    }
}
