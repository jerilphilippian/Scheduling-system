<?php

use App\Http\Controllers\Api\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('eventtype-references', [ApiController::class, 'eventtypesReferences'])
->name('api.eventtypes.references');

Route::get('department', [ApiController::class, 'departmentReferences'])
->name('api.department.references');

Route::get('position', [ApiController::class, 'positionReferences'])
->name('api.position.references');

Route::get('user-references', [ApiController::class, 'userReferences'])
->name('api.user.references');



