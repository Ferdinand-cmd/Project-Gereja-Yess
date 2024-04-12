<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/pelayanan', function () {
    return view('pelayanan');
});
Route::get('/komsel', function () {
    return view('komsel');
});

Route::get('/bareng', function () {
    return view('bareng');
});

Route::get('/event', function () {
    return view('event');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/detail', function () {
    return view('event-detail');
});

Route::get('/archived', function () {
    return view('event-archieved');
});

Route::get('/home-admin', function () {
    return view('home-admin');
});

Route::get('/pelayanan-admin', function () {
    return view('pelayanan-admin');
});