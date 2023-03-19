<?php

use App\Http\Controllers\Api\AddressApiController;
use App\Http\Controllers\Api\MediaApiController;
use App\Http\Controllers\Api\PhoneApiController;
use App\Http\Controllers\Api\SpecialtyApiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DoctorApiController;
use App\Http\Controllers\Api\PatientApiController;
use App\Http\Controllers\Api\AppointmentApiController;
use App\Http\Controllers\Api\HospitalApiController;
use App\Http\Controllers\Api\DepartmentApiController;
use App\Http\Controllers\Api\CategoryApiController;
use App\Http\Controllers\Api\BlogApiController;

Route::middleware('api')->group(function () {
    Route::apiResource('doctors', DoctorApiController::class);
    Route::get('doctors/{doctor}/patients', [DoctorApiController::class, 'patients']);
    Route::get('doctors/{doctor}/appointments', [DoctorApiController::class, 'appointments']);

    Route::apiResource('patients', PatientApiController::class);
    Route::get('patients/{patient}/appointments', [PatientApiController::class, 'appointments']);

    Route::apiResource('appointments', AppointmentApiController::class);

    Route::apiResource('hospitals', HospitalApiController::class);
    Route::get('hospitals/{hospital}/departments', [HospitalApiController::class, 'departments']);
    Route::get('hospitals/{hospital}/doctors', [HospitalApiController::class, 'doctors']);

    Route::apiResource('departments', DepartmentApiController::class);
    Route::get('departments/{department}/doctors', [DepartmentApiController::class, 'doctors']);

    Route::apiResource('categories', CategoryApiController::class);

    Route::apiResource('blogs', BlogApiController::class);
    Route::get('blogs/{blog}/comments', [BlogApiController::class, 'comments']);

    Route::apiResource('specialties', SpecialtyApiController::class);
    Route::apiResource('addresses', AddressApiController::class);
    Route::apiResource('phones', PhoneApiController::class);
    Route::apiResource('media', MediaApiController::class);
});
