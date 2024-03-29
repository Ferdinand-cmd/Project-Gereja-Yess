<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',[ 
        "profile" => "profile.jpg"
    ]);
});

Route::get('/pelayanan', function () {
    return view('pelayanan',[ 
        "profile" => "profile.jpg"
    ]);
});
Route::get('/komsel', function () {
    return view('komsel',[ 
        "profile" => "profile.jpg"
    ]);
});

Route::get('/bareng', function () {
    return view('bareng',[ 
        "profile" => "profile.jpg"
    ]);
});

Route::get('/event', function () {
    return view('event',[ 
        "profile" => "profile.jpg"
    ]);
});

Route::get('/login', function () {
    return view('login',[ 
        "profile" => "profile.jpg"
    ]);
});