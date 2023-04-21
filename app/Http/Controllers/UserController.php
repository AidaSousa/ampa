<?php

namespace App\Http\Controllers;

use App\Models\Child;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showProfile()
    {
        $user = Auth::user();
        $children = Child::where('user_id', Auth::id())->get();

        return view('user.perfil', ['children' => $children, 'user' => $user]);
    }

    public function index()
    {
    return view('user');
    }
}



