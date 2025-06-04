<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/companies/all', [App\Http\Controllers\CompanyController::class, 'all'])->name('companies.all');
Route::resource('companies', App\Http\Controllers\CompanyController::class);
