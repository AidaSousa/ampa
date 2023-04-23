<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    public function indexLibros()
    {
        $libros = Libro::all();

        return view('libros.index', ['libros' => $libros]);

    }

    public function showAllLibros()
    {
        $user_id = auth()->user()->id;

        $libros = Libro::where('user_id', $user_id);

        return view('libros.showAll', ['libros' => $libros]);
    }

    public function createLibros()
    {
        return view('libros.create');
    }

    public function storeLibros(Request $request)
    {
        $user_id = auth()->user()->id;

        $libros = new Libro();
        $libros->user_id = $user_id;
        $libros->padre_solicita = $request->input('padre_solicita');
        $libros->menor_solicita = $request->input('menor_solicita');
        $libros->curso = $request->input('curso');
        $libros->donado_libros = $request->input('donado_libros');
        $libros->tapa_libros = $request->input('tapa_libros', false);
        $libros->poner_nombre = $request->input('poner_nombre', false);
        $libros->no_subrayado = $request->input('no_subrayado', false);
        $libros->reemplazar = $request->input('reemplazar', false);
        $libros->devolver = $request->input('devolver', false);
        $libros->declaracion_leida = $request->input('declaracion_leida', false);
        $libros->conforme = $request->input('conforme', false);

        $libros->save();

        return redirect()->route('user.perfil');
    }

    public function showLibro($id)
    {
        $libro = Libro::findOrFail($id);

        return view('libros.show', ['libro' => $libro]);
    }

    public function destroyLibro($id)
    {
        $libro = Libro::findOrFail($id);

        $libro->delete();
        return redirect()->route('libros.index');
    }


}
