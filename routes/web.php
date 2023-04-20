<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);

    
});
*/

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/auth/redirect', function () {
    return Socialite::driver('github')->redirect();
});

Route::get('/auth/callback', function () {
    $githubUser = Socialite::driver('github')->user();

    $user = User::updateOrCreate([
        'github_id' => $githubUser->id

    ], [
        'name' => $githubUser-> name,
        'email' => $githubUser-> email,
        'github_token' => $githubUser-> token,
        'github_refresh_token' => $githubUser-> refreshToken,
    ]);

    Auth::login($user);

    return redirect('/dashboard');
});

/*

Route::get('/auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/auth/callback', function () {
    $googleUser = Socialite::driver('google')->user();

    $user = User::create([
        'name' => $googleUser-> name,
        'email' => $googleUser-> email,
        'google_id' => $googleUser-> id,
        'google_token' => $googleUser-> token,
        'google_refresh_token' => $googleUser-> refreshToken,
    ]);

    Auth::login($user);

    return redirect('/dashboard');
});

Route::get('/auth/redirect', function () {
    return Socialite::driver('facebook')->redirect();
});

Route::get('/auth/callback', function () {
    $facebookUser = Socialite::driver('facebook')->user();

    $user = User::create([
        'name' => $facebookUser-> name,
        'email' => $facebookUser-> email,
        'facebook_id' => $facebookUser-> id,
        'facebook_token' => $facebookUser-> token,
        'facebook_refresh_token' => $facebookUser-> refreshToken,
    ]);

    Auth::login($user);

    return redirect('/dashboard');
});


*/


Route::get('/home', function () {
    return view('home');
});

Route::get('/trennid', function () {
    return view('trennid');
});

Route::get('/blogi', function () {
    return view('blogi');
});

Route::get('/hinnakiri', function () {
    return view('hinnakiri');
});

Route::get('/kontakt', function () {
    return view('kontakt');
});
/*
Route::get('/logi_sisse', function () {
    return view('logi_sisse');
});
*/
Route::get('/peopaketid', function () {
    return view('peopaketid');
});

Route::get('/teenused', function () {
    return view('teenused');
});

Route::get('/tooted', function () {
    return view('tooted');
});

Route::get('/tunniplaan', function () {
    return view('tunniplaan');
});

Route::get('/admin_calendar', function () {
    return view('admin_calendar');
});

Route::get('/registreeri', function () {
    return view('registreeri');
});

Route::get('/maksmine', function () {
    return view('maksmine');
});

Route::get('/ostukorv', function () {
    return view('ostukorv');
});

Route::post('/create-payment-intent', 'PaymentsController@createPaymentIntent');




Route::get('/events', 'EventController@index')->name('events.index');



require __DIR__.'/auth.php';
