<?php

use App\Http\Controllers\CreateNewUserController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RemoveUserController;
use App\Http\Controllers\UpdateUserController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/me', function (Request $request) {
    return $request->user();
});


Route::post('/signup', [CreateNewUserController::class, 'store']);
Route::post('/login',  [LoginUserController::class, 'index']);

Route::get('/user/{id}',    [UserController::class, 'show']);
Route::get('/user',    [UserController::class, 'showAll']);
Route::patch('/user/{id}',  [UpdateUserController::class, 'update']);
Route::delete('/user/{id}', [RemoveUserController::class, 'delete']);

Route::post('/permission/{userId}/{permissionId}', [PermissionController::class, 'store']);
Route::delete('/permission/{userId}/{permissionId}', [PermissionController::class, 'destroy']);
Route::delete('/permission/{rel}', [PermissionController::class, 'destroyRelation']);
Route::get('/permission/{userId}', [PermissionController::class, 'show']);