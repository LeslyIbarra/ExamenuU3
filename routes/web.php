<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;

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

Route::get('/perl', function () {





    return view ('blog.index');


}) ->name('perl');
Route::get('/significa', function () {





    return view ('blog.significa');


}) ->name('significa');

Route::get('/caracteristicas', function () {





    return view ('blog.caracteristicas');


}) ->name('caracteristicas');
Route::get('/ventajas', function () {





    return view ('blog.ventajas');


}) ->name('ventajas');
Route::get('/logo', function () {





    return view ('blog.logo');


}) ->name('logo');

Route::get('api', [App\Http\Controllers\APIController::class, 'index'])->name('api');

Route::get('informacion/{name,country}',[APIController::class, 'detallePersonaje'])->name('detalle.personaje');

Route::get('/bd', function () {
    $notes = DB::table('publicaciones')->get();
    return view('blog.bd', ['publicaciones' => $notes]);
})->name('bd');