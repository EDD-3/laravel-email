<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    //Create body for the email
    $data = [
        'title' => ' Hi student I hope you like the course',
        'content' => 'This laravel course was created with a lot of love and dedication for you'
    ];

    //Calling method to send email, calling the view, passing the body, calling the function
    Mail::send('emails.test', $data, function($message){
    
        //Sending the email
        $message->to('eduramq@gmail.com', 'Ed')->subject('Hope you are doing good!');
        
    });

});
