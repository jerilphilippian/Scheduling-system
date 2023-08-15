<?php

//DASHBOARD

use App\Http\Controllers\Auth\LoginController;
use App\Http\Livewire\Approval\Index as ApprovalIndex;
use App\Http\Livewire\Approval\View as ApprovalView;
use App\Http\Livewire\Dashboard\Index;
use App\Http\Livewire\Events\Events as EventsIndex;
use App\Http\Livewire\Events\Invitation\Index as InvitationIndex;
use App\Http\Livewire\Events\Invitation\View as InvitationView;
use App\Http\Livewire\Events\MyEvents\Index as MyEventsIndex;
use App\Http\Livewire\Events\MyEvents\View as MyEventView;
use App\Http\Livewire\Events\View as EventsView;
use App\Http\Livewire\Login\Login;
use App\Http\Livewire\Events\Events;
use App\Http\Livewire\UserManagement\Index as UserManagementIndex;
use App\Http\Livewire\Room\Index as RoomIndex;
use App\Http\Livewire\Profile\Index as ProfileIndex;
use App\Http\Livewire\UserManagement\Create as UserManagementCreate;
use App\Http\Livewire\UserManagement\Department\Index as DepartmentIndex;
use App\Http\Livewire\UserManagement\Edit as UserManagementEdit;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\UserManagement\Roles\Index as RoleIndex;
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

Route::get('/dashboard', Index::class)->name('index');
// Route::get('/events', Events::class)->name('events');

Route::get('/login', Login::class)->name('login');

Route::post('authenticate', [LoginController::class, 'login'])->name('login.authenticate');
Route::get('logout', [LoginController::class, 'logout'])->name('login.logout');
// all events
Route::prefix('events')->name('events.')->group(function () {
    Route::get('/', EventsIndex::class)->name('index');
    Route::get('/view/{id}', EventsView::class)->name('view');
});

// my events
Route::prefix('my-events')->name('my-events.')->group(function () {
    Route::get('/', MyEventsIndex::class)->name('index');
    Route::get('/view/{id}', MyEventView::class)->name('view');
});

// invitations
Route::prefix('invitation')->name('invitation.')->group(function () {
    Route::get('/', InvitationIndex::class)->name('index');
    Route::get('/view', InvitationView::class)->name('view');
});

// approval
Route::prefix('approval')->name('approval.')->group(function () {
    Route::get('/', ApprovalIndex::class)->name('index');
    Route::get('/view/{id}', ApprovalView::class)->name('view');
});

// user management
Route::prefix('user-management')->name('user-management.')->group(function () {
    Route::get('/', UserManagementIndex::class)->name('index');
    Route::get('/create', UserManagementCreate::class)->name('create');
    Route::get('/edit/{user}', UserManagementEdit::class)->name('edit');
});

// Roles
Route::prefix('roles')->name('roles.')->group(function () {
    Route::get('/', RoleIndex::class)->name('index')->middleware(['can:role-view']);
});

// Department
Route::prefix('department')->name('department.')->group(function () {
    Route::get('/', DepartmentIndex::class)->name('index')->middleware(['can:department-view']);
});

// Route::get('/events', Events::class)->name('events');
// Route::get('/user-management', UserManagementIndex::class)->name('user-management');
Route::get('/room', RoomIndex::class)->name('room');
Route::get('/profile', ProfileIndex::class)->name('profile');
