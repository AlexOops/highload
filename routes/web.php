<?php

use App\Handlers\LoggerHandler;
use App\Http\Controllers\RedisController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemcachedController;

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
    return view('welcome');
});

Route::get('handler', [loggerHandler::class, 'handler'])->name('handler');
Route::get('memcached', [MemcachedController::class, 'index'])->name('memcached');
Route::get('redis', [RedisController::class, 'index'])->name('redis');
