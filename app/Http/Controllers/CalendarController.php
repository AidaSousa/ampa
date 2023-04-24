<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $all_events = Event::all();

        $events = [];

        foreach ($all_events as $event){
            $events[] =[
                'title' => $event->event,
                'start' => $event->start_date,
                'end' => $event->end_date,

            ];
        }

        return view('calendar', compact('events'));
    }

}
