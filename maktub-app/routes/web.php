<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanoController;

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
    return view('maktub-seguros');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/maktub', function(){
    return view('maktub-seguros');
});


Route::get('/planos/listar',[PlanoController::class, 'index']);
Route::get('/planos/cadastro',[PlanoController::class, 'create']);
Route::post('/planos/salvar',[PlanoController::class, 'store']);
Route::post('/planos/atualizar/{id}',[PlanoController::class, 'atualizar']);
Route::get('/planos/deletar/{id}',[PlanoController::class, 'delete']);
Route::get('/planos/{id}/editar/',[PlanoController::class, 'edit']);

