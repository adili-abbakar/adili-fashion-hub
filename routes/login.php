<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/login', [LoginController::class, 'login'])->name('login.index');
