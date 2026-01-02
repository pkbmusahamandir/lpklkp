<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ModulBController;
use App\Http\Controllers\ModulAController;


Route::get('/profil', function () {return view('profil');})->name('profil');


Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard.admin');

Route::get('/admin/video', [VideoController::class, 'index'])->name('video');
Route::get('/foto', [PhotoController::class, 'publicIndex'])->name('foto.public');
Route::get('/admin/photo', [PhotoController::class, 'index'])->name('photo');

Route::get('/video', [VideoController::class, 'index']);

Route::get('/', [AppController::class, 'index']);

Route::get('/berita', [AppController::class, 'berita']);

Route::get('/detail/{slug}', [AppController::class, 'detail']);
Route::get('/detail/{slug}', [AppController::class, 'detail'])->name('blog.detail');


Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth');

Route::get('/blog', [BlogController::class, 'index'])->name('blog')->middleware('auth');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create')->middleware('auth');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store')->middleware('auth');
Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit')->middleware('auth');
Route::put('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update');
Route::delete('/blog/delete/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');

Route::get('/photo', [PhotoController::class, 'index'])->name('photo')->middleware('auth');
Route::post('/photo/store', [PhotoController::class, 'store'])->name('photo.store')->middleware('auth');
Route::put('/photo/update/{id}', [PhotoController::class, 'update'])->name('photo.update');
Route::delete('/photo/delete/{id}', [PhotoController::class, 'destroy'])->name('photo.destroy');

Route::get('/video', [VideoController::class, 'index'])->name('video')->middleware('auth');
Route::post('/video/store', [VideoController::class, 'store'])->name('video.store')->middleware('auth');
Route::put('/video/update/{id}', [VideoController::class, 'update'])->name('video.update');
Route::delete('/video/delete/{id}', [VideoController::class, 'destroy'])->name('video.destroy');

Route::get('/video', [VideoController::class, 'publicIndex'])->name('video.public');

// Modul Paket C
Route::resource('modul_c', App\Http\Controllers\ModulCController::class);
Route::get('/paket-c', [AppController::class, 'modulC'])->name('user.modul_c');

Route::resource('modul_b', ModulBController::class);
// route user view modul
Route::get('/modulB', [ModulBController::class, 'userIndex'])->name('modulB.user');


Route::middleware(['auth'])->group(function () {
    Route::resource('modul_a', ModulAController::class);
});

// === Modul Paket A ===
Route::get('/modula', [AppController::class, 'modulA'])->name('modul.a');