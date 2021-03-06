<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('users._admin_index');
    }

    public function profile()
    {
        return view('user.profile', [
            'user' => Auth::user(),
        ]);
    }
    public function order()
    {
        return view('user.order');
    }

}
