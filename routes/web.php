<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubmissionController;

Route::get('/form', [SubmissionController::class, 'showForm']);
Route::post('/form', [SubmissionController::class, 'submitForm']);

Route::get('/', function () {
    return view('welcome');
});
