<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
})->name("inicio");

Route::get('/CadastrarAlunos', function () {
    return view('Alunos/cadastrarAlunos');
})->name("cadastrarAluno");

/*rota de controllers do aluno*/
Route::get ('/fromAlunos', [App\Http\Controllers\controllerAluno::class, 'mandaDados']) ->name('formCadastrarAluno');
Route::post ('/cadastrarAlunos', [App\Http\Controllers\controllerAluno::class, 'store']) ->name('cadastrarAluno');
Route::get ('/alunos', [App\Http\Controllers\controllerAluno::class, 'index']) ->name('indexAlunos');
