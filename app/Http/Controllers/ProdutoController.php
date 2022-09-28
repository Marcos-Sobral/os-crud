<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Produtos;
use Inertia\Inertia;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = "blusa";
        
        return Inertia::render('Home',[
            'name' => $produtos
        ]);
    }

    public function about()
    {
        $produtos = "blusa";
        
        return Inertia::render('About',[
            'name' => $produtos
        ]);
    }

    public function register()
    {
        $produtos = "blusa";
        
        return Inertia::render('Register',[
            'name' => $produtos
        ]);
    }

}