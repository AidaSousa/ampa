<?php

namespace App\Http\Controllers;

use App\Models\Associated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssociatedController extends Controller
{
    public function indexAssociated() 
    {
        $associated = Associated::paginate(10);
        return view('associated.index', ['associated' => $associated]);
    }

    public function createAssociated() {

        return view('associated.create');
    }

    public function storeAssociated(Request $request) {

        $associated = new Associated();

        $associated->user_id = auth()->user()->id;
        $associated->situacion = $request->post('situacion');
        $associated->email_comunicacion_directa = $request->post('email_comunicacion_directa');
        $associated->beca_comedor = $request->post('beca_comedor');
        $associated->name_padre_madre = $request->post('name_padre_madre');
        $associated->surname_padre_madre = $request->post('surname_padre_madre');
        $associated->dni = $request->post('dni');
        $associated->telefono = $request->post('telefono');
        $associated->direccion = $request->post('direccion');
        $associated->colaboracion_ampa = $request->post('colaboracion_ampa');
        $associated->payment_id = $request->post('payment_id');

        $associated->save();

        return redirect()->route('associated.index')->with('success', 'Asociado creado correctamente');
    }

    public function show($id)
    {
        $associated = Associated::findOrFail($id);
        
        return view('associated.show', compact('associated'));
    }

    public function editAssociated($id)
    {
        $associated = Associated::findOrFail($id);
        return view('associated.edit', ['associated' => $associated]);
    }

    public function updateAssociated(Request $request, $id)
    {
        $associated = Associated::findOrFail($id);
        $associated->situacion = $request->input('situacion');
        $associated->email_comunicacion_directa = $request->input('email_comunicacion_directa');
        $associated->beca_comedor = $request->input('beca_comedor');
        $associated->name_padre_madre = $request->input('name_padre_madre');
        $associated->surname_padre_madre = $request->input('surname_padre_madre');
        $associated->dni = $request->input('dni');
        $associated->telefono = $request->input('telefono');
        $associated->direccion = $request->input('direccion');
        $associated->colaboracion_ampa = $request->input('colaboracion_ampa');
        $associated->payment_id = $request->input('payment_id');

        $associated->save();

        return redirect()->route('associated.index')->with('success', 'Asociado actualizado correctamente');
    }

    // public function destroyAssociated(Associated $associated)
    // {
    //     if($associated->user_id != Auth::user()->id) {
    //         return redirect()->back()->withErrors('No tienes permiso para eliminar este asociado');
    //     }

    //     $associated->delete();
    //     return redirect()->route('associated.index')->with('success', 'Asociado eliminado correctamente');
    // }

    public function destroyAssociated($id)
{
    $associated = Associated::find($id);

    if (!$associated) {
        return redirect()->route('associated.index')->withErrors('El asociado no existe');
    }

    // if($associated->user_id != Auth::user()->id) {
    //     return redirect()->back()->withErrors('No tienes permiso para eliminar este asociado');
    // }

    $associated->delete();
    return redirect()->route('associated.index')->with('success', 'Asociado eliminado correctamente');
}

}
