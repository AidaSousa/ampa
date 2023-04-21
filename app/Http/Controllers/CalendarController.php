<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class CalendarController extends Controller
{
    public function index()
    {
        $events = Event::all();
        
        $events = [];

        foreach ($all_events as $event) {
            $events[] = [
                'title' => $event->name,
                'start' => $event->start_date,
                'end' => $event->end_date,
            ];
        }
        return view('components.calendar', compact('events'));
    }
}
