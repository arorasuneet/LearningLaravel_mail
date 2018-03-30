<?php

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

use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
//    return view('welcome');

    $data = [
        'title' => 'When are you coming back?',
        'content' => 'I was in your neighbourhood last time, and I could not find way back!'
    ];

    Mail::send('emails.test', $data, function($message)
    {
        $message->to('arorasuneet@gmail.com', 'Suneet')->subject('Hi! What\'s up');
    });

});
