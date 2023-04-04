<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
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
