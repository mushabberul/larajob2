<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FrontController extends Controller
{
    public function UserAllData()
    {
       $users = User::all();

       return view('home',['users' => $users]);

    }
}
