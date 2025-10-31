<?php
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::apiResource('student', StudentController::class);
