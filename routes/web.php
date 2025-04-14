<?php

use App\Http\Controllers\MainController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'index'])->name('index');

Route::get('/OneToOne', [MainController::class, 'OneToOne']);

Route::get('/OneToMany', [MainController::class, 'OneToMany']);

Route::get('/BelongsTo', [MainController::class, 'BelongsTo']);
