<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\DoktorDetailController;
use App\Http\Controllers\DoktorListesiController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('uzman-listesi', [DoktorListesiController::class, 'index'])->name('uzman-listesi');
Route::get('doctor/{id?}', [DoktorDetailController::class, 'show'])->name('doctor');


Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'doktorget'])->name('admin.doctor');
    Route::get('/doctor/edit/{id?}', [AdminController::class, 'edit'])->name('admin.doctor');
    Route::post('/doctor/update/{id?}', [AdminController::class, 'update'])->name('admin.doctor.edit');
});

