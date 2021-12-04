<?php

use App\Events\UserNotification;
use App\Models\User;
use App\Notifications\UserCreated;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/sender/{user}', function (User $user) {
    // $user->notify(new UserCreated($user));
    event(new UserNotification($user));
});

Route::get('/receiver', function () {
    return view('receiver');
});
