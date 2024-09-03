<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SetorController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PerfilController;

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

Route::get('/', function () {
    return redirect("/setor");
});
