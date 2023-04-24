<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function indexCategory() {

        $categories = Category::all();

        return view('categories.index', ['categories' => $categories]);
    }

    public function createCategory() {

        return view('categories.create');
    }

    public function storeCategory(Request $request) {

        $categories = new Category();

        $categories->name = $request->post('name');

        $categories->save();

        return redirect()->route('categories.index')->with('success', 'Categoria creada correctamente');
    }

    public function showCategory(Category $category) {

        return view('categories.show', ['categories' => $category]);
    }

    public function editCategory($id) {

        $categories = Category::findOrFail($id);
        return view('categories.edit', ['categories' => $categories]);
    }

    public function updateCategory(Request $request, $id) {

        $categories = Category::findOrFail($id);
        $categories->name = $request->input('name');

        $categories->save();

        return redirect()->route('categories.index')->with('success', 'Categoria actualizada correctamente');
    }

    public function destroyCategory($id) {

        $categories = Category::findOrFail($id);

        $categories->delete();
        return redirect()->route('categories.index');
    }




}
