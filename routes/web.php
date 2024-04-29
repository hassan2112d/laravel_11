<?php

use App\Http\Controllers\StudentController;
use Database\Seeders\StudentSeeder;
use Illuminate\Support\Facades\Route;

Route::get('/',[StudentController::class,'showstudent']);

Route::view('/form','form');

Route::post('/addusers',[StudentController::class,'addusers'])->name('addusers');