<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
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

    public function create()
    {
        return Inertia::render('Produto/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'NomeProduto' => ['required'],
            'QuantidadeProduto' => ['required'],
            'PrecoProduto' => ['required'],
        ]);
        
        /* Criando Produto */
        Produtos::create([
            'NomeProduto' => $request->NomeProduto,
            'QuantidadeProduto' => $request->QuantidadeProduto,
            'PrecoProduto' => $request->PrecoProduto,
        ]);

        return redirect::route('produto.about')->with('success', 'Produto criado com sucesso !');
    }

    public function show()
    { 
        return Inertia::render('Ver');
    }

    public function sobre(){
        return Inertia::render('Produto/Sobre');
    }

    public function about()
    { 
        $produto = Produtos::all();
        return Inertia::render('Produto/About', ['produto' => $produto]);
    }

    public function edit($id)
    { 
        $produto = Produtos::find($id);
        return Inertia::render('Produto/Edit', ['produto' => $produto]);
    }

    public function update(Request $request, $id)
    {
        $produto = Produtos::find($id);
        $produto->update($request->all());
        return Redirect::route('produto.about')->with('success', 'Produto criado com sucesso !');
    }
    public function destroy($id)
    {
        $produto=Produtos::find($id);
        $produto->delete();
        return Redirect::route('produto.about')->with('success', 'Produto deletado com sucesso !');
    }
}