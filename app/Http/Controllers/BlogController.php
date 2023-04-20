<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;


class BlogController extends Controller
{
    public function index()
    {
        // Obtén todos los blogs desde la base de datos
        $blogs = Blog::all();
        
        // Retorna la vista 'blogs.blade.php' y pasa los blogs como datos
        return view('blog.blogs', compact('blogs'));
    }
    
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validación de la imagen
        ]);

        $post = new Blog([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $post->saveImage($image); // Llama a la función saveImage() para guardar la imagen
        }

        return redirect()->route('posts.index')->with('success', 'Post creado exitosamente');
    }

    public function show($id)
    {
        $post = Blog::find($id); // Cambia la variable $blog a $post
    
        return view('blog.post', compact('post')); // Utiliza la variable $post en la función compact()
    }
    
}