<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    function EventIndex(){
        return view('admin_calendar');
    }
    function EventInsert(Request $request){

        $event_name = $request->input('event_name');
        $event_comment = $request->input('event_comment');
        $event_start_date = $request->input('event_start_date');
        $event_end_date = $request->input('event_end_date');

        $isInserted = Event::insert(['event_name'=> $event_name,
                                    'event_comment'=> $event_comment,
                                    'event_start_date'=> $event_start_date,
                                    'event_end_date'=> $event_end_date
                                ]);

        if($isInserted) echo '<h1>Andmete sisestamine õnnestus</h1>';
        else echo '<h1>Proovi uuesti</h1>';
    }

}
