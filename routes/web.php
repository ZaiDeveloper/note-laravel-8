<?php

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
    return view('index');
});

Route::get('/websocket/send-socket-io', function () {
    event(new \App\Events\SendMessage());
    dd('Event Run Successfully.');
});
Route::get('/websocket/receive-socket-io', function () {
    return view('websocket/receive-socket-io');
});
