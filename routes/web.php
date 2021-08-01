<?php

use App\Http\Controllers\CursoController;
use Illuminate\Routing\Route as RoutingRoute;
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
| Aquí es donde usted puede registrar rutas web para su aplicación. 
| Estas rutas son cargadas por el RouteServiceProvider dentro de un
| grupo que contiene el grupo middleware "web". ¡Ahora crea algo genial!
*/

Route::get('/', HomeController::class);

Route::get('cursos', [CursoController::class, 'index']);

Route::get('cursos/create', [CursoController::class, 'create']);

Route::get('cursos/{curso}',  [CursoController::class, 'show']);
