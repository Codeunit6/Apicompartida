<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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
Route::get('/index', [ApiController::class,'inicio'])->name('index');
Route::get('detalle/{id}', [ApiController::class,'detalle'])->name('detalle');
Route::get('detalleingrediente/{in}', [ApiController::class,'informacion'])->name('detallei');
Route::get('/', function(){
    return view('elements');
})->name('inicio');
Route::get('/noalcohilicas',[ApiController::class,'noalcohol'])->name('noalcohol');
Route::get('/alcohol',[ApiController::class,'alcohol'])->name('alcohol');
Route::get('/api/bebidas',[ApiController::class,'apivodka'])->name('api');
Route::get('/api/bebidasalcoholicas',[ApiController::class,'apialcohol'])->name('apialcohol');
Route::get('/api/bebidasnoalcoholicas',[ApiController::class,'apinoalcohol'])->name('apinoalcohol');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
