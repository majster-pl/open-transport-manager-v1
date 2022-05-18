<?php

use App\Http\Livewire\Home;
use App\Http\Livewire\Loads;
use App\Http\Livewire\Inbound;
use App\Http\Livewire\Outbound;
use App\Http\Livewire\Planning;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;


Route::middleware(['auth'])->group(function () {
    Route::get('/', Home::class)->name('home');
    Route::get('/outbound', Outbound::class)->name('outbound');
    Route::get('/inbound', Inbound::class)->name('inbound');
    Route::get('/loads', Loads::class)->name('loads');
    Route::get('/planning', Planning::class)->name('planning');
    
});

Route::get('users/export/', [OrderController::class, 'export']);

require __DIR__ . '/auth.php';
