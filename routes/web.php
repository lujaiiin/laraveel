<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "hello world";
});



Route::get('/hola', function () {
    return view('hola');
});


Route::get ('/holla', function () {
    return 10 * 60;});

Route::get('user/{id}/{Name}',function($id, $Name) {
    echo 'ID: '.$id . 'And Name is: '.$Name;
});

Route::get('/user/{phone}', function ($phone) {
    echo 'user phone number is : '.$phone;
})->wherenumber('phone');

Route::get('/user/{phone}', function ($phone) {
    echo 'user phone number is : '.$phone;
});

Route::get('/user/{username}', function ($username) {
    echo 'the username is : '.$username;
})->where('username', '[a-zA-Z]+');

Route::get('/us/{active}', function ($active) {
    echo ' u answer : '. $active ;
})->where('active', '(true|false)');

Route::get('/user/{float}', function ($float) {
    echo 'the float number is : '.$float;
})->where('float', '\d+(\.\d+)?');