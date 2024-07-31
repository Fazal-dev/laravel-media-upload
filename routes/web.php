<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('form');
});


Route::post('/submit', [FormController::class, 'submit'])->name('form.submit');
