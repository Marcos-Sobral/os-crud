<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::prefix('crud')->group(function(){
    Route::get('/', function () { return view('welcome'); })->name('index');
    Route::get('/principal', [ProdutoController::class, 'index'])->name('produtos-index');
});

Route::fallback(function(){
    return 'Erro';
});