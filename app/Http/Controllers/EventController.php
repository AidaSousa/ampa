<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function indexEvent() {

        $events = Event::paginate(10);
        return view('events.index', ['events' => $events]);
    }

    public function createEvent() {

        return view('events.create');
    }

    public function storeEvent(Request $request) {

        $events = new Event();

        $events->user_id = auth()->user()->id;
        $events->name = $request->post('name');
        $events->description = $request->post('description');
        $events->date = $request->post('date_event');
        $events->price_no_associated = $request->post('price_no_associated');
        $events->price_associated = $request->post('price_associated');
        $events->date_finilized = $request->post('date_finilized');
        $events->category_id = $request->post('category_id');

        $events->save();

        return redirect()->route('events.index')->with('success', 'Evento creado correctamente');
    }

    public function showEvent(Event $event) {
        
        return view('events.show', ['event' => $event]);
    }

    public function editEvent($id) {

        $events = Event::findOrFail($id);
        return view('events.edit', ['events' => $events]);
    }

    public function updateEvent(Request $request, $id) {

        $events = Event::findOrFail($id);
        $events->user_id = auth()->user()->id;
        $events->name = $request->post('name');
        $events->descripcion = $request->post('descripcion');
        $events->date = $request->post('date_event');
        $events->price_no_associated = $request->post('price_no_associated');
        $events->price_associated = $request->post('price_associated');
        $events->date_finilized = $request->post('date_finilized');
        $events->category_id = $request->post('category_id');
        
        $events->save();

        return redirect()->route('events.index')->with('success', 'Evento actualizado correctamente');
    }

    public function destroyEvent($id) {

        $events = Event::findOrFail($id);

        if($events->user_id != Auth::user()->id) {
            return redirect()->back()->withErrors('message', 'No tienes permiso para eliminar este evento');
        }

        $events->delete();
        return redirect()->route('events.index');
    }

}
