<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $users=User::all();

        return view('backend.author.auth.dashboard');
    }

}
