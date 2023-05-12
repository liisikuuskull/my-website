<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PagesController extends Controller
{
    public function home()
    {   
        //dd(now()->timestamp);
        //https://admin.hopitude.com/api/v1/calendar/workout-events/club/1460/?format=json&from=1680307200000&to=1682812800000
        $url = "https://admin.hopitude.com/api/v1/calendar/workout-events/club/1460/?format=json&from=1680307200000&to=".now()->addDays(30)->getTimestampMs();
        $response = Http::get($url)->json();
        
        return view('home', [
            "timetable" => $response
        ]);
    }

    public function tunniplaan()
    {
        return view('tunniplaan');
    }

    public function hinnakiri()
    {
        return view('hinnakiri');
    }

    public function trennid()
    {
        return view('trennid');
    }

    public function teenused()
    {
        return view('teenused');
    }

    public function peopaketid()
    {
        return view('peopaketid');
    }

    public function tooted()
    {
        return view('tooted');
    }

    public function blogi()
    {
        return view('blogi');
    }

    public function kontakt()
    {
        return view('kontakt');
    }

    public function logi_sisse()
    {
        return view('logi_sisse');
    }
}
