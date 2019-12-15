<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
class ClientesController extends Controller
{

    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index',compact('clientes'));
    }


    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([ 
            'name' => 'unique:clientes'
        ]);
        $clientes = new Cliente();
        $clientes->name = $request->name;
        $clientes->cnpj = $request->cnpj;
        $clientes->save();
        return redirect('/clientes');
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
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect('/clientes');
    }
}
