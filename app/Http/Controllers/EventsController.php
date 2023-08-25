<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    //

    public function index(){
        $events = Event::all();

        $formattedEvents = [];
        foreach ($events as $event) {
            $formattedEvents[] = [
                'title' => $event->name,
                'start' => Carbon::parse($event->event_date)->toDateTimeString(),
                // 'end' => $event->updated_at
            ];
        }

        return response()->json($formattedEvents);
    }
}
