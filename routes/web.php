<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\KomselController;
use App\Http\Controllers\AdminPelayananController;
use App\Http\Controllers\EventController;

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

Route::get('/event-detail', function () {
    return view('event-detail');
});

Route::get('/event-archived', function () {
    return view('event-archieved');
});

Route::get('/jadwal-ibadah', function () {
    return view('jadwal-ibadah');
});

Route::middleware([\App\Http\Middleware\EnsureUserIsAdmin::class])->group(function () {
    Route::get('/admin', function () {
        return view('home-admin');
    });
});

Route::middleware([\App\Http\Middleware\EnsureUserIsAdmin::class])->group(function () {
    Route::get('/pelayanan-admin', function () {
        return view('pelayanan-admin');
    });
});

Route::middleware([\App\Http\Middleware\EnsureUserIsAdmin::class])->group(function () {
    Route::get('/event-admin', function () {
        return view('event-admin');
    });
});

Route::middleware([\App\Http\Middleware\EnsureUserIsAdmin::class])->group(function () {
    Route::get('/admin', function () {
        return view('home-admin');
    });

    Route::get('/pelayanan-admin', function () {
        return view('pelayanan-admin');
    });

    Route::get('/event-admin', function () {
        return view('event-admin');
    });
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/register_event', [PelayananController::class, 'registerEvent'])->middleware('auth');
Route::post('/register_potential_komsel', [KomselController::class, 'register'])->middleware('auth');
Route::post('/admin/pelayan_reg/{id}/approve', [AdminPelayananController::class, 'approveRegistration'])->name('admin.registrations.approve');
Route::post('/admin/pelayan_reg/{id}/reject', [AdminPelayananController::class, 'rejectRegistration'])->name('admin.registrations.reject');
Route::post('/admin/pelayan_approved/{id}/remove', [AdminPelayananController::class, 'removeApprovedMember'])->name('admin.registrations.remove');
Route::get('/pelayanan-admin', [AdminPelayananController::class, 'showRegistrations'])->name('pelayanan-admin');
Route::get('/admin/pelayan_reg', [AdminPelayananController::class, 'showRegistrations'])->name('admin.registrations.index');
Route::get('/event-admin', [EventController::class, 'index']);
Route::post('/event-admin/store', [EventController::class, 'store']);
Route::post('/event-admin/archive/{id}', [EventController::class, 'archive']);
Route::post('/event-admin/register/{eventId}', [EventController::class, 'register']);
Route::get('/events', [EventController::class, 'index']);
Route::post('/events/{id}/update', [EventController::class, 'update'])->name('events.update');