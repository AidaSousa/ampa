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
        return view('blog.index', compact('blogs'));
    }

    public function showAllBlogs()
    {
        // Obtén todos los blogs desde la base de datos
        $blogs = Blog::all();
        
        // Retorna la vista 'blogs.blade.php' y pasa los blogs como datos
        return view('blog.blogs', compact('blogs'));
    }
    
    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $blogs = new Blog();

        if ($request->hasFile('image_path')) {
            $file = $request->file('image_path');
            $destinationPath = 'img/uploads/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('image_path')->move($destinationPath, $filename);
            $blogs->image_path = $destinationPath . $filename;
        }

        $blogs->title = $request->post('title');
        $blogs->content = $request->post('content');

        $blogs->save();

        return redirect()->route('blog.index')->with('success', 'Evento creado correctamente');

    }

    public function show($id)
    {
        $post = Blog::find($id); // Cambia la variable $blog a $post
    
        return view('blog.post', compact('post')); // Utiliza la variable $post en la función compact()
    }

    public function destroy($id)
    {
        $blogs = Blog::findOrFail($id);

        $blogs->delete();
        return redirect()->route('blog.index');
    }
    
}