<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/hit-me-senpai",function() {
    event(new \App\Events\SenpaiEvent());
    return null;
});

Route::post("/message-me-senpai",function(\Illuminate\Http\Request $request) {
    event(new \App\Events\MessageMeSenpaiEvent($request->message));
    return null;
});

Route::get("/visit-me-senpai",function() {
    return view("websockets");
});