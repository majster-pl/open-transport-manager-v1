<?php

use App\Http\Livewire\Home;
use App\Http\Livewire\Inbound;
use App\Http\Livewire\Loads;
use App\Http\Livewire\Outbound;
use App\Http\Livewire\Planning;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware(['auth'])->group(function () {
    Route::get('/', Home::class)->name('home');
    Route::get('/outbound', Outbound::class)->name('outbound');
    Route::get('/inbound', Inbound::class)->name('inbound');
    Route::get('/loads', Loads::class)->name('loads');
    Route::get('/planning', Planning::class)->name('planning');
    // Route::get('/', function () {
    //     return view('dashboard.index');
    // })->middleware(['auth'])->name('home');

});

require __DIR__ . '/auth.php';
