<?php

//DASHBOARD
use App\Http\Livewire\Dashboard\Index;
use App\Http\Livewire\Events\Events;
use App\Http\Livewire\UserManagement\Index as UserManagementIndex;
use App\Http\Livewire\Room\Index as RoomIndex;
use App\Http\Livewire\Profile\Index as ProfileIndex;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

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
Route::get('/user-management', UserManagementIndex::class)->name('user-management');
Route::get('/room', RoomIndex::class)->name('room');
Route::get('/profile', ProfileIndex::class)->name('profile');
