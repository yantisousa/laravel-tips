<?php

use App\Http\Controllers\TestController;
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

Route::get('/usuarios', [TestController::class, 'listaAllUser'])->name('usuarios');
Route::get('/usuarios/create', [TestController::class, 'create'])->name('usuarios.formAddUser');
Route::get('/usuarios/edit/{user}', [TestController::class, 'edit'])->name('usuarios.edit');
Route::post('/usuarios/store', [TestController::class, 'store'])->name('usuarios.store');
Route::get('/usuarios/{user}', [TestController::class, 'listUser'])->name('usuarios.list');

//atualização de usuários 
Route::put('/usuarios/update/{user}', [TestController::class, 'update'])->name('usuarios.update');

//deletar usuário 
Route::delete('/usuario/destroy/{user}', [TestController::class, 'destroy'])->name('usuarios.destroy');