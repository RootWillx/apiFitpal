<?php

use App\Http\Controllers\API\ScheduleController;
use App\Http\Controllers\API\UserController;
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
// CRUD con usuarios sin eloquent resources
Route::get('users',[UserController::class,'index']);
Route::get('users/{id}',[UserController::class,'show']);
Route::post('users',[UserController::class,'store']);
Route::put('users/{user}',[UserController::class,'update']);
Route::delete('users/{user}',[UserController::class,'destroy']);
// CRUD con clases y horario con resources 
Route::get('schedules',[ScheduleController::class,'index']);
Route::get('schedules/{id}',[ScheduleController::class,'show']);
Route::post('schedules',[ScheduleController::class,'store']);
Route::put('schedules/{id}',[ScheduleController::class,'update']);
Route::delete('schedules/{id}',[ScheduleController::class,'destroy']);
