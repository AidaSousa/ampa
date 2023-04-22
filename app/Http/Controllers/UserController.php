<?php

namespace App\Http\Controllers;

use App\Models\Child;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function showProfile()
    {
        $user = Auth::user();
        $children = Child::where('user_id', Auth::id())->get();

        return view('user.perfil', ['children' => $children, 'user' => $user]);
    }

}



