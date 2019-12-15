@extends('app.index',["current" => "pedidos"])
@section('body')
<div class="card">     
    <div class="card-body">
        <h3>Ver Pedidos</h3>
        @if(count($pedidos)>0)
        <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Pedido</th>
                    <th scope="col">Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($pedidos as $pedido)
                <tr>
                   <td> {{$pedido->id}}</td> 
                   <td> {{$pedido->numero}}</td> 
                   <td><a href="/pedidos/{{$pedido->id}}" class="btn btn-sm btn-warning">Ver Mais</a> </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            @else
            Nenhum Pedido em nossos registro.
            @endif
            
            <hr>
            <a href="/pedidos/novo" class="btn btn-sm btn-success"> Criar novo Pedido </a>
         </div>
 </div>
 @endsection
 