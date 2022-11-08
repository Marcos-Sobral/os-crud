<?php
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::prefix('crud')->group(function(){
    Route::get('/principal', [ProdutoController::class, 'index'])->name('produto.home');
    Route::get('/principal/ver', [ProdutoController::class, 'show'])->name('produto.show');
    
    Route::get('/criar', [ProdutoController::class, 'create'])->name('produto.create');
    Route::post('/criar', [ProdutoController::class, 'store'])->name('produto.store');
    
    Route::get('/edit/{id}', [ProdutoController::class, 'edit'])->name('produto.edit');
    Route::put('/edit/{id}', [ProdutoController::class, 'update'])->name('produto.update');
    
    Route::get('/about', [ProdutoController::class, 'about'])->name('produto.about');
    Route::delete('/about/{id}', [ProdutoController::class, 'destroy'])->name('produto.destroy');

    Route::get('/sobre', function () { return Inertia::render('Produto/Sobre', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('produto.sobre');

    Route::get('/register', [UserController::class, 'index'])->name('user.index');
    Route::post('/register', [UserController::class, 'store'])->name('produto.store');
}); 

Route::get('/dashboard', function () { return Inertia::render('Dashboard');})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
