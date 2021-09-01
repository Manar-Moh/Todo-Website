<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todosController;

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

Route::get('/', function () { return view('welcome');});

Route::get('/Todos',[todosController::class, 'index']);

Route::get('/Todos/{todorequest}',[todosController::class, 'show']);

Route::get('/create',[todosController::class, 'create']);

Route::post('/create',[todosController::class, 'store']);

Route::get('/Todos/{todorequest}/edit',[todosController::class, 'edit']);

Route::post('/Todos/{todorequest}',[todosController::class, 'update']);

Route::get('/Todos/{todorequest}/delete',[todosController::class, 'delete']);

Route::get('/Todos/{todorequest}/complete',[todosController::class, 'complete']);
