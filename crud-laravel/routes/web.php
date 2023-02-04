<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminBidangUrusanController;
use App\Http\Controllers\AdminUrusanController;
use App\Http\Controllers\BerandaAdminController;
use App\Http\Controllers\BerandaController;
use Illuminate\Support\Facades\Route;




route::resource('/', BerandaController::class);
route::resource('beranda', BerandaController::class);
route::resource('about', AboutController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

route::resource('berandaadmin', BerandaAdminController::class)->middleware(['auth']);
route::resource('urusanadmin', AdminUrusanController::class)->middleware(['auth']);
route::resource('bidangurusanadmin', AdminBidangUrusanController::class)->middleware(['auth']);
route::get('urusanadmin/{id}/download', [AdminUrusanController::class, 'download'])->middleware(['auth']);

require __DIR__.'/auth.php';
