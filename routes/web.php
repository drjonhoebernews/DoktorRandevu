<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\DoktorDetailController;
use App\Http\Controllers\DoktorListesiController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AppointmentController;
USE App\Http\Controllers\Api\HospitalApiController;

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
Route::get('/giris', [LoginController::class,'showLoginForm'])->name('login');
Route::post('/giris', [LoginController::class,'login']);
Route::post('/cikis', [LoginController::class,'logout'])->name('logout');

Route::get('/kayit', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/kayit',  [RegisterController::class, 'register']);

Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('/randevu-al', [AppointmentController::class, 'index'])->name('randevu-al');
Route::get('uzman-listesi', [DoktorListesiController::class, 'index'])->name('uzman-listesi');
Route::get('doctor/{id?}', [DoktorDetailController::class, 'show'])->name('doctor');


Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'doktorget'])->name('admin.doctor');
    Route::get('/doctor/edit/{id?}', [AdminController::class, 'edit'])->name('admin.doctor');
    Route::post('/doctor/update/{id?}', [AdminController::class, 'update'])->name('admin.doctor.edit');
});

//Route::get('/kliniktohospital', [HospitalApiController::class, 'kliniktohospital'])->name('kliniktohospital');
//Route::get('/sonuc', [HospitalApiController::class, 'sonuc'])->name('sonuc');
//Route::get('/doktorcreate', [App\Http\Controllers\Api\DoctorApiController::class, 'doktorcreate'])->name('doktorcreate');


