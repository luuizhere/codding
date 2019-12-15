<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Cliente;
use  App\Produto;

class ProdutosController extends Controller
{
    
    public function index()
    {
        $produtos = Produto::all();
        return view('produtos.index',compact('produtos'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        return view('produtos.create',compact('clientes'));
    }

    public function store(Request $request)
    {
        $produto = new Produto();
        $produto->name = $request->name;
        $produto->valor = $request->valor;
        $produto->save();
        return redirect('/produtos');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        $produtos  = Produto::find($id);
        $produtos->delete();
        return redirect('/produtos');
    }
}
