<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function allUser(){
        $users = User::GET();
        return view('users.allUsers ')->with('users',$users);
    }
}
