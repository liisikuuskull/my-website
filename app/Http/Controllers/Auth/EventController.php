

<!-- SEDA POLE VAJA-->
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $events = Event::all();

        return response()->json($events);
    }
}
