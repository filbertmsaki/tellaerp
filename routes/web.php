<?php

use App\Http\Controllers\Admin\AdminController;
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
    return view('welcome');
})->name('web.index');


Route::group(['prefix' => 'admin', 'middleware' => [
    'auth',
    config('jetstream.auth_session'),
    'verified'
]], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::group(['prefix' => 'admin','as'=>'admin.', 'middleware' => [
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'password.confirm'
]], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('index');
});
