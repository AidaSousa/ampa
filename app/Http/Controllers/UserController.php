<?php

namespace App\Http\Controllers;

use App\Models\Child;
use App\Models\Event;
use App\Models\EventUser;
use App\Models\Libro;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function showProfile()
    {
        $user = Auth::user();

        $libros = Libro::where('user_id', Auth::id())->get();

        $eventUsers = EventUser::where('user_id', Auth::id())->get();
    

        return view('user.perfil', [ 'user' => $user, 'libros' => $libros, 'eventUsers' => $eventUsers ]);
    }

    // public function showAllLibros()
    // {
    //     $user_id = auth()->user()->id;

    //     $libros = Libro::where('user_id', $user_id)->get();

    //     return view('libros.showAll', ['libros' => $libros, 'user_id' => $user_id]);
    // }
}



