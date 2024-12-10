<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;


Route::resource("students",StudentsController::class);
