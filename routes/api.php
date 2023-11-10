<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\ChatGPTController;
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

Route::post('/auth/register', [AuthController::class, 'createUser']);
Route::post('/auth/login', [AuthController::class, 'loginUser']);
Route::group(['middleware' => 'auth.chatgpt'], function () {
    // Your ChatGPT API routes go here
    Route::post('chat-gpt-search',[ChatGPTController::class,'ChatGPT'])->name('chat.store');
    Route::get('chat-info',[ChatGPTController::class,'index'])->name('chat.index');

});
