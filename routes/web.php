<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    HomeController,
    AlunosController,
    FichaController,
    PainelGerencialController

};


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/perfil', [ProfileController::class, 'edit'])->name('profile.edit');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

////// BASE
    Route::get('/base', [HomeController::class, 'home']);
    
    
////// Alunos
    Route::get('/alunos/alunos', [AlunosController::class, 'home']);
    Route::get('/alunos/form_alunos', [AlunosController::class, 'create']);


////// FICHAS
Route::get('/ficha/table', [FichaController::class, 'home']);
Route::get('/ficha/form',  [FichaController::class, 'create']);

////// PAINEL GERENCIAL (DASHBOARD)
Route::get('/painel', [PainelGerencialController::class, 'dashboard']);

Route::get('/painel/index', [PainelGerencialController::class, 'index']);
Route::get('/painel/cadastro/index', [PainelGerencialController::class, 'cadastro_menu']);
Route::get('/painel/consulta_ficha', [PainelGerencialController::class, 'consulta_ficha']);
Route::get('/painel/consulta_aluno', [PainelGerencialController::class, 'consulta_aluno']);

Route::get('/painel/cadastro/cadastro_aluno',      [PainelGerencialController::class, 'cadastro_aluno']);
Route::get('/painel/cadastro/cadastro_categoria',  [PainelGerencialController::class, 'cadastro_categoria']);
Route::get('/painel/cadastro/cadastro_conselho',   [PainelGerencialController::class, 'cadastro_conselho']);
Route::get('/painel/cadastro/cadastro_escola',     [PainelGerencialController::class, 'cadastro_escola']);
Route::get('/painel/cadastro/cadastro_ministerio', [PainelGerencialController::class, 'cadastro_ministerio']);
Route::get('/painel/cadastro/cadastro_polo',       [PainelGerencialController::class, 'cadastro_polo']);
Route::get('/painel/cadastro/cadastro_prazo',      [PainelGerencialController::class, 'cadastro_prazo']);
Route::get('/painel/cadastro/cadastro_serie',      [PainelGerencialController::class, 'cadastro_serie']);



Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
->name('logout');

});

require __DIR__.'/auth.php';
