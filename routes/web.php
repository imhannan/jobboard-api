<?php

use App\Http\Controllers\JobController;
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

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::get('jobs', [JobController::class, 'index']);
Route::get('jobs/{job}', [JobController::class, 'show']);

Route::middleware('auth:sanctum')->prefix('auth')->group(function (){
    Route::get('me',[\App\Http\Controllers\Auth\UserController::class,'me']);
});
require __DIR__ . '/auth.php';
