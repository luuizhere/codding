<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Pedido;
use App\Cliente;
use App\ProdutosHasPedido;

class PedidosController extends Controller
{
    public function index(Request $request)
    {   
        $pedidos = Pedido::all();
        return view('pedidos.index',compact('pedidos'));
    }

    public function create()
    {
        $produtos = Produto::all();
        $clientes = Cliente::all();
        return view('pedidos.create',compact('produtos','clientes'));
    }

    public function store(Request $request)
    {
        // dd($request->produtos);
        $pedido = new Pedido();
        $pedido->cliente_id = $request->cliente_id;
        $pedido->numero = $request->pedido;
        $pedido->save();

        foreach($request->produtos as $prod){
            $pedidoHasProduto = new ProdutosHasPedido();
            $pedidoHasProduto->pedido_id = $pedido->id;
            $pedidoHasProduto->produto_id = $prod;
            $pedidoHasProduto->save();
        }
        return redirect('/pedidos/'.$pedido->id);
    }
    public function show($id)
    {
        $retorno = ProdutosHasPedido::where('pedido_id',$id)->get();
        $cliente = Pedido::find($id);
        return view('pedidos.ver',compact('retorno','cliente'));
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($pedido_id,$produto_id)
    {
        $pedido = ProdutosHasPedido::where('pedido_id',$pedido_id)->where('produto_id',$produto_id)->first();
        $pedido->delete();
        return redirect('/pedidos');
    }
}
