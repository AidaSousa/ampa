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
        return view('eventUser.index', ['eventUsers' => $eventUsers]);
    }

    public function createEventUser() {

        $events = Event::all();
        $users = User::all();
        $children = Child::all();
        // $payments = Payment::all();

        return view('eventUser.create', ['events' => $events, 'users' => $users, 'children' => $children]);
    }

    public function storeEventUser(Request $request) {

        $eventsUser = new EventUser();
        $eventsUser->event_id = $request->input('event_id');
        $eventsUser->user_id = $request->input('user_id');
        $eventsUser->child_id = $request->input('child_id');
        $eventsUser->phone_contact = $request->input('phone_contact');
        $eventsUser->matriculado_centro = $request->input('matriculado_centro');
        $eventsUser->directo_comedor = $request->input('directo_comedor');
        $eventsUser->necesidades_especiales = $request->input('necesidades_especiales');
        $eventsUser->quantity = $request->input('quantity');
        $eventsUser->total_price = $request->input('total_price');
        $eventsUser->payment_id = $request->input('payment_id');
        $eventsUser->save();
    
        return redirect()->route('eventUser.index')->with('success', 'Event User creado correctamente.');
    }

    public function showEventUser($id) {

        $eventsUser = EventUser::findOrFail($id);

        return view('eventUser.show', ['eventsUser' => $eventsUser]);
    }

    public function editEventUser(EventUser $eventUser) {

        $events = Event::all();
        $users = User::all();
        $children = Child::all();
        // $payments = Payment::all();

        return view('eventUser.edit', ['eventUser' => $eventUser, "events" => $events, 'users' => $users, 'children' => $children]);
    }

    public function updateEventUser(Request $request, EventUser $eventUser) {

        $eventUser->event_id = $request->input('event_id');
        $eventUser->user_id = $request->input('user_id');
        $eventUser->child_id = $request->input('child_id');
        $eventUser->phone_contact = $request->input('phone_contact');
        $eventUser->matriculado_centro = $request->input('matriculado_centro');
        $eventUser->directo_comedor = $request->input('directo_comedor');
        $eventUser->necesidades_especiales = $request->input('necesidades_especiales');
        $eventUser->quantity = $request->input('quantity');
        $eventUser->total_price = $request->input('total_price');
        $eventUser->payment_id = $request->input('payment_id');
        $eventUser->save();
    
        return redirect()->route('eventUser.index')->with('success', 'Event User actualizado correctamente.');
    }

    public function destroyEventUser($id) {

        $eventUser = EventUser::findOrFail($id);

        if ($eventUser->user_id != Auth::user()->id) {
            return redirect()->back()->withErrors('message', 'No tienes permiso para eliminar este registro');
        }

        $eventUser->delete();
        return redirect()->route('eventUser.index');
    }
    
}
