<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('zapateria/compra', [HomeController::class,'compra'])->name('zapateria.compra');

Route::get('zapateria/inicio', [HomeController::class,'inicio'])->name('zapateria.inicio'); 

Route::get('zapateria/conocenos', [HomeController::class,'conocenos'])->name('zapateria.conocenos');

Route::get('zapateria/registrate', [HomeController::class,'registrate'])->name('zapateria.registrate');

Route::get('zapateria/confort', [HomeController::class,'conforth'])->name('zapateria.conforth');

Route::get('zapateria/vestirhombre', [HomeController::class,'vestirhombre'])->name('zapateria.vestirhombre');

Route::get('zapateria/botasmujer', [HomeController::class,'botasmujer'])->name('zapateria.botasmujer');

Route::get('zapateria/tacon', [HomeController::class,'tacon'])->name('zapateria.tacon');

Route::get('zapateria/tenismujer', [HomeController::class,'tenismujer'])->name('zapateria.tenismujer');

Route::get('zapateria/tenisniña', [HomeController::class,'tenisniña'])->name('zapateria.tenisniña');

Route::get('zapateria/zapatosniña', [HomeController::class,'zapatosniña'])->name('zapateria.zapatosniña');

Route::get('zapateria/escolarniña', [HomeController::class,'escolarniña'])->name('zapateria.escolarniña');

Route::get('zapateria/tenisniño', [HomeController::class,'tenisniño'])->name('zapateria.tenisniño');

Route::get('zapateria/zapatosniño', [HomeController::class,'zapatosniño'])->name('zapateria.zapatosniño');

Route::get('zapateria/escolarniño', [HomeController::class,'escolarniño'])->name('zapateria.escolarniño');

Route::get('zapateria/botashombre', [HomeController::class,'botashombre'])->name('zapateria.botashombre');

Route::get('zapateria/comun', [HomeController::class,'comun'])->name('zapateria.comun');

Route::get('zapateria/tenishombre', [HomeController::class,'tenishombre'])->name('zapateria.tenishombre');

Route::get('zapateria/hombre', [HomeController::class,'hombre'])->name('zapateria.hombre');

Route::get('zapateria/mujer', [HomeController::class,'mujer'])->name('zapateria.mujer');

Route::get('zapateria/niño', [HomeController::class,'niño'])->name('zapateria.niño');

Route::get('zapateria/niña', [HomeController::class,'niña'])->name('zapateria.niña');

Route::get('zapateria/catalogocompleto', [HomeController::class,'catalogocompleto'])->name('zapateria.catalogocompleto');

Route::get('zapateria/login', [HomeController::class,'login'])->name('zapateria.login');

Route::get('zapateria/ubicanos', [HomeController::class,'ubicanos'])->name('zapateria.ubicanos');

