<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);
        $types = Type::all();
        return view('users.usersDetail')->with('user', $user);
    }
}
