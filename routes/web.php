<?php

use Illuminate\Support\Facades\Route;
use App\Models\Ingreso;
use App\Models\Usuario;
use App\Http\Controllers\Controller;

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

Route::get('/dashboard', function () {
    $ultimos_ingresos = Ingreso::all();
    $users = Usuario::all();
    return view('dashboard', compact('ultimos_ingresos'), compact('users'));
})->middleware(['auth'])->name('dashboard');


Route::post('/nuevo-ingreso', [Controller::class, 'nuevo_ingreso'])->middleware(['auth']);

Route::get('/salidas', [Controller::class, 'salidas'])->middleware(['auth']);

Route::post('/nueva-salida', [Controller::class, 'nueva_salida'])->middleware(['auth']);


require __DIR__.'/auth.php';
