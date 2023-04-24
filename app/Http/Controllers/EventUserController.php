<?php

namespace App\Http\Controllers;

use App\Models\Child;
use App\Models\Event;
use App\Models\EventUser;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventUserController extends Controller
{
  

    public function indexEventUser() {

        $eventUsers = EventUser::all();
        return view('events-user.index', ['eventUsers' => $eventUsers]);
    }

    public function showAllEventsUser()
    {
        $user_id = auth()->user()->id;

        $eventUsers = EventUser::where('user_id', $user_id);

        return view('events-user.showAll', ['eventUsers' => $eventUsers]);
    }


    public function createEventUser() {

    
        $events = Event::all();
    
        return view('events-user.create', [
            'events' => $events,
        ]);
    }
    

    public function store(Request $request) {

        $user_id = auth()->user()->id;

        $eventsUser = new EventUser();
        $eventsUser->event_id = $request->input('event_id');
        $eventsUser->user_id = $user_id;
        $eventsUser->name_children = $request->input('name_children');
        $eventsUser->surname_children = $request->input('surname_children');
        $eventsUser->birth_date = $request->input('birth_date');
        $eventsUser->school_year = $request->input('school_year');
        $eventsUser->phone_contact = $request->input('phone_contact');
        $eventsUser->matriculado_centro = $request->input('matriculado_centro');
        $eventsUser->directo_comedor = $request->input('directo_comedor');
        $eventsUser->necesidades_especiales = $request->input('necesidades_especiales');
        $eventsUser->save();
    
        return redirect()->route('user.perfil')->with('success', 'Event User creado correctamente.');
    }

    public function showEventUser($id) {

        $eventUser = EventUser::findOrFail($id);

        return view('events-user.show', ['eventUser' => $eventUser]);
    }

    public function destroyEventUser($id) {

        $eventUser = EventUser::findOrFail($id);

        $eventUser->delete();
        return redirect()->route('events-user.index');
    }
    
}
