<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendWebhookController;
use App\Http\Controllers\WebscrapingController;

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

Route::group([
    'prefix' => 'websocket',
    'as' => 'websocket.',
], function () {
    Route::get('/send-socket-io', function () {
        event(new \App\Events\SendMessage());
        dd('Event Run Successfully.');
    });
    Route::get('/receive-socket-io', function () {
        return view('websocket/receive-socket-io');
    });
});

Route::group([
    'prefix' => 'webhook',
    'as' => 'webhook'
], function () {
    Route::webhooks('webhook-receiving-url');
    Route::get('/send-test', [SendWebhookController::class, 'send'])->name('send-test-webhook');
});


Route::group([
    'prefix' => 'webscraping',
    'as' => 'webscraping'
], function () {
    Route::get('/sample', [WebscrapingController::class, 'sample'])->name('sample');
});
