<?php

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
});

Route::get('/almacen', function () {
    return view('almacen');
});

Route::get('/main', function () {
    return view('main');
});

Route::get('/material', function () {
    return view('material');
});

Route::get('/seccion', function () {
    return view('seccion');
});

Auth::routes();

Route::post('/api/seccion/load', [App\Http\Controllers\SeccionController::class, 'load'])->name('alimentar');
Route::get('/api/seccion/update', [App\Http\Controllers\SeccionController::class, 'update'])->name('actualizar');
Route::delete('/api/seccion/delete', [App\Http\Controllers\SeccionController::class, 'delete'])->name('borrar');

Route::post('/api/almacen/load', [App\Http\Controllers\AlmacenController::class, 'load'])->name('alimentar');
/*Route::get('/api/almacen/update', [App\Http\Controllers\AlmacenController::class, 'update'])->name('actualizar');
Route::delete('/api/almacen/delete', [App\Http\Controllers\AlmacenController::class, 'delete'])->name('borrar');*/

Route::post('/api/material/load', [App\Http\Controllers\MaterialController::class, 'load'])->name('alimentar');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
