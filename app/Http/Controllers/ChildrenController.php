<?php

namespace App\Http\Controllers;

use App\Models\Child;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChildrenController extends Controller
{
    public function indexChildren() {

         // Obtiene el usuario actual
        $user = Auth::user();

        // Obtiene los hijos del usuario actual
        $children = Child::where('user_id', $user->id);

        // Retorna la vista con la lista de hijos
        return view('children.index', ['children' => $children]);
    }

    public function createChildren() {

        return view('children.create');
    }

    public function storeChildren(Request $request) {

        $children = new Child();

        $children->user_id = auth()->user()->id;
        $children->name = $request->post('name');
        $children->surname = $request->post('surname');
        $children->birth_date = $request->post('birth_date');
        $children->school_year = $request->post('school_year');

        $children->save();

        return redirect()->route('user.profile')->with('success', 'Children created successfully!!');
    }

    public function showChildren($id) {

        $children = Child::findOrFail($id);
        
        return view('children.show', compact('children'));
    }

    public function editChildren($id) {

        $children = Child::findOrFail($id);
        return view('children.edit', compact('children'));
    }

    public function updateChildren(Request $request, $id) {

        $children = Child::findOrFail($id);
        $children->name = $request->input('name');
        $children->surname = $request->input('surname');
        $children->birth_date = $request->input('birth_date');
        $children->school_year = $request->input('school_year');
        
        $children->save();

        return redirect()->route('user.profile')->with('success', 'Children updated successfully!!');
    }

    public function destroyChildren($id) {

        $children = Child::findOrFail($id);

        if($children->user_id != Auth::user()->id) {
            return redirect()->back()->withErrors('message', 'No tienes permiso para eliminar este niño');
        }

        $children->delete();
        return redirect()->route('user.profile');
    }
}
