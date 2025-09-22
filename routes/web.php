<?php

use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
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
    return view('index');
});

Route::get('p', function () {
    return view('Product');
});

Route::get('h', function () {
    return view('home');
});



Route::get('a', [App\Http\Controllers\a::class, 'ab'] );
Route::get('b', [App\Http\Controllers\a::class, 'ba'] );
Route::resource('p',"App\Http\Controllers\NewgoldController");


Route::get('h', function () {
    return view('home');
})->middleware(['auth'])->name('home');
Route::middleware(['auth', 'role:admin'])->name('admin.index')->prefix('admin')->group(function () {
Route::get('/', [App\Http\Controllers\NewgoldController::class, 'index'])->name('index');
//Route::resource('/roles', RoleController::class);
//Route::resource('/permissions', PermissionController::class);
});



Auth::routes();

//Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
