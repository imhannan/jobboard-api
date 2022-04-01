<?php

use App\Http\Controllers\ApplicationController;
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

Route::prefix('jobs')->controller(JobController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/{job:slug}', 'show');
    Route::post('/{job:slug}/apply', [ApplicationController::class, 'create'])->middleware('auth:sanctum');
});

Route::prefix('applications')->controller(ApplicationController::class)->middleware('auth:sanctum')->group(function () {
    Route::get('/', 'index');
    Route::get('/{application}', 'show');
});
require __DIR__ . '/auth.php';
