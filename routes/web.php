<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;

Route::get('/', function(){
    return view('admin_layout.index');
});

Route::get('/categoria', [ CategoriaController::class, 'index' ]);
Route::get("/categoria/exc/{id}", [ CategoriaController::class, 'ExcluirCategoria' ])->name('categoria_ex');
Route::get("/categoria/upd/{id}", [ CategoriaController::class, 'BuscarAlteracao' ])->name('categoria_upd');
Route::post('/categoria', [ CategoriaController::class, 'IncluirCategoria' ]);
Route::post('/categoria/upd', [ CategoriaController::class, 'ExecutaAlteracao' ]);

Route::get('/produtos', [ProdutoController::class,'index'])->name('produto_index');
Route::post('/produtos', [ProdutoController::class,'salvarNovoProduto'])->name('novo_produto');
