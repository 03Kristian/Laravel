<?php

use App\Http\Controllers\ejercicio1Controller;
use App\Http\Controllers\ejercicio4Controller;
use App\Http\Controllers\ejercicio5Controller;
use App\Http\Controllers\ejercicio6Controller;
use App\Http\Controllers\ejercico3Controller;
use App\Http\Controllers\practica1Controller;
use App\Http\Controllers\practica2Controller;
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

Route::get('/practica1', [practica1Controller::class,'verformulariopractica1'])
->name('ejercicio1');
Route::post('resultado_pr1', [practica1Controller::class,'resultadoPractica1'])
->name('resultado_pr1');
//metodo name que es otra forma de llamarlo.
Route::get('/practica2',[practica2Controller::class,'practica2'])
->name('practica2');

Route::post('resultado_pr2', [practica2Controller::class,'resultado_pr2'])
->name('resultado_pr2');

Route::get('/ejercicio1', [ejercicio1Controller::class, 'ejercicio1'])
->name('ejercicio1');

Route::post('resultado_ejr1',[ejercicio1Controller::class, 'resultado_ejr1'])
->name('resultado_ejr1');

Route::get('/ejercicio3', [ejercico3Controller::class, 'ejercicio3'])
->name('ejercicio3');

Route::post('resultado_ejr3',[ejercico3Controller::class, 'resultado_ejr3'])
->name('resultado_ejr3');

Route::get('/ejercicio4', [ejercicio4Controller::class, 'ejercicio4'])
->name('ejercicio4');

Route::post('resultado_ejr4',[ejercicio4Controller::class, 'resultado_ejr4'])
->name('resultado_ejr4');

Route::get('/ejercicio5', [ejercicio5Controller::class, 'ejercicio5'])
->name('ejercicio5');

Route::post('resultado_ejr5', [ejercicio5Controller::class, 'resultado_ejr5'])
->name('resultado_ejr5');

Route::get('/ejercicio6', [ejercicio6Controller::class, 'ejercicio6'])
->name('ejercicio6');

Route::post('resultado_ejr6', [ejercicio6Controller::class, 'resultado_ejr6'])
->name('resultado_ejr6');