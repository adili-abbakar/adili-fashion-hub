<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/admin-section', [AdminController::class, 'index'])->name('admin.index');
