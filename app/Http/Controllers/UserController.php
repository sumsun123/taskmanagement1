<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user_list()
    {
        $users = User::all();

//         dd($users);
       return view('hello', compact('users'));
    }
}
