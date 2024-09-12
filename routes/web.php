<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SetorController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\FuncaoController;
use App\Http\Controllers\Usuario_FuncaoController;

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

Route::resource("/setor", SetorController::class);
Route::resource("/usuario", UsuarioController::class);
Route::resource("/perfil", PerfilController::class);
Route::resource("/funcao", FuncaoController::class);

Route::post("/usuario/{usuario}/funcao", [Usuario_FuncaoController::class, "store"])->name("store");
Route::delete("/usuario_funcao/{usuario_id}/{funcao_id}", [Usuario_FuncaoController::class, "destroy"])->name("destroy");

Route::get('/', function () {
    return redirect("/setor");
});
