<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\KomselController;
use App\Http\Controllers\AdminPelayananController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PickupPointController;
use App\Http\Controllers\PendetaController;

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

Route::get('/jadwal', function () {
    return view('jadwal-ibadah');
});

Route::get('/ladies-devotion', function () {
    return view('ladies-devotion');
});

Route::get('/yess', function () {
    return view('yess');
});

Route::get('/sunday-school', function () {
    return view('sunday-school');
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

    Route::get('/bareng-admin', function () {
        return view('bareng-admin');
    });

    Route::get('/penjadwalan-admin', function () {
        return view('penjadwalan-admin');
    });
    
    Route::get('/analisis-admin', function () {
        return view('analisis-admin');
    });
    
    Route::get('/komsel-admin', function () {
        return view('komsel-admin');
    });
    
    Route::get('/penjadwalan-night-admin', function () {
        return view('penjadwalan-night-admin');
    });
    
    Route::get('/penjadwalan-night-kebutuhan-admin', function () {
        return view('penjadwalan-night-kebutuhan-admin');
    });
    
    Route::get('/penjadwalan-umum-admin', function () {
        return view('penjadwalan-umum-admin');
    });
    
    Route::get('/penjadwalan-umum-kebutuhan-admin', function () {
        return view('penjadwalan-umum-kebutuhan-admin');
    });
    
    Route::get('/penjadwalan-yess-admin', function () {
        return view('penjadwalan-yess-admin');
    });
    
    Route::get('/penjadwalan-yess-kebutuhan-admin', function () {
        return view('penjadwalan-yess-kebutuhan-admin');
    });
    
    Route::get('/analisis-admin', function () {
        return view('analisis-admin');
    });
    Route::get('/list-pendeta', function () {
        return view('list-pendeta');
    });
    Route::get('/list-jemaat', function () {
        return view('list-jemaat');
    });
});


// jangan lupa hapus ini
Route::get('/analisis-admin', function () {
    return view('analisis-admin');
});
Route::get('/penjadwalan-admin', function () {
    return view('penjadwalan-admin');
});
Route::get('/penjadwalan-night-admin', function () {
    return view('penjadwalan-night-admin');
});

Route::get('/penjadwalan-night-kebutuhan-admin', function () {
    return view('penjadwalan-night-kebutuhan-admin');
});

Route::get('/penjadwalan-umum-admin', function () {
    return view('penjadwalan-umum-admin');
});

Route::get('/penjadwalan-umum-kebutuhan-admin', function () {
    return view('penjadwalan-umum-kebutuhan-admin');
});

Route::get('/penjadwalan-yess-admin', function () {
    return view('penjadwalan-yess-admin');
});

Route::get('/penjadwalan-yess-kebutuhan-admin', function () {
    return view('penjadwalan-yess-kebutuhan-admin');
});
Route::get('/list-pendeta', function () {
    return view('list-pendeta');
});
Route::get('/list-jemaat', function () {
    return view('list-jemaat');
});
//

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/absenKomsel', function () {
    return view('absenKomsel');
});

Route::get('/aturKomsel', function () {
    return view('aturKomsel');
});

Route::get('/aturKomsel_eventKhusus', function () {
    return view('aturKomsel_eventKhusus');
});

Route::get('/bareng-jemput', function () {
    return view('bareng-jemput');
});

Route::get('/bareng-terdaftar', function () {
    return view('bareng-terdaftar');
});


Route::get('/jadwal-ibadah', function () {
    return view('jadwal-ibadah');
});

Route::get('/home-2', function () {
    return view('home-2');
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

Route::get('/bareng', [PickupPointController::class, 'index'])->name('bareng.index');
Route::post('/bareng/book/{id}', [PickupPointController::class, 'book'])->name('bareng.book');
Route::post('/bareng/cancel-booking/{id}', [PickupPointController::class, 'cancelBooking'])->name('bareng.cancelBooking');

Route::get('/admin', [PendetaController::class, 'index'])->name('admin.pendetas');
Route::post('/admin', [PendetaController::class, 'store'])->name('admin.pendetas.store');