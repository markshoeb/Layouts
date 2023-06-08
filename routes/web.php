<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controller\HomeController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/demo', [HomeController::class, "index"])->name('calci');
Route::get('/form', [HomeController::class, "form"])->name('form');
Route::get('/form1', [HomeController::class, "form1"])->name('form1');
Route::get('/class1', [HomeController::class, "class1"])->name('class1');
Route::get('/class2', [HomeController::class, "class2"])->name('class2');
Route::get('/class3', [HomeController::class, "class3"])->name('class3');
Route::get('/class4', [HomeController::class, "class4"])->name('class4');
Route::get('/class5', [HomeController::class, "class5"])->name('class5');
Route::get('/class6', [HomeController::class, "class6"])->name('class6');
Route::get('/class7', [HomeController::class, "class99"])->name('class7');
