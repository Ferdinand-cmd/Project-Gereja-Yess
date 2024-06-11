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
Route::get('/event-admin', [EventController::class, 'admin']);
Route::post('/event-admin/store', [EventController::class, 'store'])->name('events.store');;
Route::post('/event-admin/update/{id}', [EventController::class, 'update'])->name('events.update');
Route::delete('/event-admin/delete/{id}', [EventController::class, 'delete'])->name('events.delete');
Route::post('/event-admin/archive/{id}', [EventController::class, 'archive'])->name('events.archive');
Route::post('/event-admin/archive/{id}/undo', [EventController::class, 'archive'])->name('events.archive.undo');
Route::post('/event-admin/register/{eventId}', [EventController::class, 'register']);
Route::get('/event', [EventController::class, 'user']);
Route::post('/event/register', [EventController::class, 'register'])->name('event.register');
Route::get('/event/{id}', [EventController::class, 'show'])->name('event.show');
Route::get('/event-detail', [EventController::class, 'showDetail']);
