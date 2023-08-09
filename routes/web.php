<?php

//DASHBOARD
use App\Http\Livewire\Dashboard\Index;
use App\Http\Livewire\Events\Events;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Index::class)->name('index');
Route::get('/events', Events::class)->name('events');
