<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\BetController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\SystemTreeController;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

# Arbol de Sistema
Route::get('/arbol-de-sistema', [SystemTreeController::class, 'index']);

# Apuestas
Route::get('/apuestas', [BetController::class, 'index']);

# Encuentros
Route::get('/encuentros', [MeetingController::class, 'index']);

# Usuarios
Route::get('/usuarios', [UserController::class, 'index']);
Route::get('/usuarios/crear-usuario', [UserController::class, 'create']);
Route::post('/usuarios/guardar-usuario', [UserController::class, 'store']);
Route::get('/usuarios/{id}/ver-usuario', [UserController::class, 'show']);
Route::get('/usuarios/{id}/editar-usuario', [UserController::class, 'edit']);
Route::put('/usuarios/{id}/actualizar-usuario', [UserController::class, 'update']);
Route::delete('/usuarios/{id}/eliminar-usuario', [UserController::class, 'destroy']);

# Configuraciones

# -- Roles
Route::get('/roles', [RoleController::class, 'index']);
Route::get('/roles/crear-rol', [RoleController::class, 'create']);
Route::post('/roles/guardar-rol', [RoleController::class, 'store']);
Route::get('/roles/{id}/ver-rol', [RoleController::class, 'show']);
Route::get('/roles/{id}/editar-rol', [RoleController::class, 'edit']);
Route::put('/roles/{id}/actualizar-rol', [RoleController::class, 'update']);
Route::delete('/roles/{id}/eliminar-rol', [RoleController::class, 'destroy']);

# -- Agencias
Route::get('/agencias', [AgencyController::class, 'index']);
Route::get('/agencias/crear-agencia', [AgencyController::class, 'create']);
Route::post('/agencias/guardar-agencia', [AgencyController::class, 'store']);
Route::get('/agencias/{id}/ver-agencia', [AgencyController::class, 'show']);
Route::get('/agencias/{id}/editar-agencia', [AgencyController::class, 'edit']);
Route::put('/agencias/{id}/actualizar-agencia', [AgencyController::class, 'update']);
Route::delete('/agencias/{id}/eliminar-agencia', [AgencyController::class, 'destroy']);

# -- Monedas
Route::get('/monedas', [CurrencyController::class, 'index']);
Route::get('/monedas/crear-moneda', [CurrencyController::class, 'create']);
Route::post('/monedas/guardar-moneda', [CurrencyController::class, 'store']);
Route::get('/monedas/{id}/ver-moneda', [CurrencyController::class, 'show']);
Route::get('/monedas/{id}/editar-moneda', [CurrencyController::class, 'edit']);
Route::put('/monedas/{id}/actualizar-moneda', [CurrencyController::class, 'update']);
Route::delete('/monedas/{id}/eliminar-moneda', [CurrencyController::class, 'destroy']);

# -- Bancos
Route::get('/bancos', [BankController::class, 'index']);
Route::get('/bancos/crear-banco', [BankController::class, 'create']);
Route::post('/bancos/guardar-banco', [BankController::class, 'store']);
Route::get('/bancos/{id}/ver-banco', [BankController::class, 'show']);
Route::get('/bancos/{id}/editar-banco', [BankController::class, 'edit']);
Route::put('/bancos/{id}/actualizar-banco', [BankController::class, 'update']);
Route::delete('/bancos/{id}/eliminar-banco', [BankController::class, 'destroy']);