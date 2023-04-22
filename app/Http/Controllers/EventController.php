<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{
    public function indexEvent() {


        $categories = Category::all();

        $events = Event::paginate(10);
        return view('events.index', ['events' => $events, 'categories' => $categories]);
    }

    public function showAllEvents() {

        $categories = Category::all();

        $events = Event::paginate(10);
        return view('events.events', compact('events', 'categories'));
    }

    public function createEvent() {

        $categories = Category::all();

        return view('events.create', compact('categories'));
    }

    public function storeEvent(Request $request) {

        $events = new Event();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $destinationPath = 'img/uploads/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('image')->move($destinationPath, $filename);
            $events->image = $destinationPath . $filename;
        }

        $events->name = $request->post('name');
        $events->description = $request->post('description');
        $events->start_date = $request->post('start_date');
        $events->price_no_asociated = $request->post('price_no_asociated');
        $events->price_associated = $request->post('price_associated');
        $events->end_date = $request->post('end_date');
        $events->category_id = $request->post('category_id');

        $events->save();

        return redirect()->route('events.index')->with('success', 'Evento creado correctamente');
    }

    public function showEvent($id) {

        $event = Event::find($id);
        
        return view('events.show', ['event' => $event]);
    }


    public function destroyEvent($id) {

        $events = Event::findOrFail($id);

        $events->delete();
        return redirect()->route('events.index');
    }

}
