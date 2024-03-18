<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function listUsers()
    {
        $users = User::orderBy('created_at', 'DESC')->get();
  
        return view('register', compact('users'));
    }
}
