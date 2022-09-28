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
    Route::get('/principal', [ProdutoController::class, 'index'])->name('home');
    Route::get('/about', [ProdutoController::class, 'about']);
    Route::get('/principal/ver', [ProdutoController::class, 'show']);

    Route::get('/register', [UserController::class, 'index']);
    Route::post('/register', [UserController::class, 'store']);
}); 

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
