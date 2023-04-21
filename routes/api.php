<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/timetable', function (Request $request){

    dd($request->from);
    $url = "https://admin.hopitude.com/api/v1/calendar/workout-events/club/1460/?format=json&from=1680307200000&to=1682812800000";
    $response = Http::get($url);
    return $response->json();
});