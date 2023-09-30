<?php

use App\Http\Controllers\PruebaController;
use App\Http\Controllers\TreeController;
use App\Models\Tree;
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

Route::get('/miprimerapp/{dato?}', function ($dato = null) {
    return view('pruebas')
        ->with('dato', $dato)
        ->with('hobbies', ['Películas', 'Videojuegos', 'Fútbol', 'Playa']);
});

Route::get('/rutacontrolador/{dato?}', [PruebaController::class, 'index']);
/*->with('dato', $dato)
 ->with('hobbies', array('Películas', 'Videojuegos', 'Fútbol', 'Playa'));*/

Route::get('trees', [TreeController::class, 'index'])->name('trees.index');
Route::get('trees/create', [TreeController::class, 'create'])->name('trees.create');
Route::post('trees', [TreeController::class, 'store'])->name('trees.store');
Route::get('trees/{tree}', [TreeController::class, 'show'])->name('trees.show');
Route::get('trees/{tree}/edit', [TreeController::class, 'edit'])->name('trees.edit');