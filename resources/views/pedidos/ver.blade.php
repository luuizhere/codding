@extends('app.index',["current" => "pedidos"])
@section('body')
<div class="card">     
    <div class="card-body">
        <h3>Ver Pedido </h3>
        <hr>
        @php
        $i = 0;   
        @endphp
        @foreach ($retorno as $pedido)
            @if($i == 0)
              <h5>Informações do Pedido</h5>
              <br>
              <p>Cliente: {{$cliente->cliente->name}}</p>
              <p>Numero do Pedido: {{$pedido->pedido->numero}} </p>
              <table style="width:100%; border-collapse: separate;" class="table table-hover">
                  <tr>
                    <th>#</th>
                    <th>Produto</th>
                    <th>Valor</th>
                    <th>Ações</th>
                  </tr>
                  <tr>
            @endif
                <td>{{$i+1}} </td>
                <td>{{$pedido->produto->name}} </td>
                <td>R${{$pedido->produto->valor}} </td>
                  <td><a href="/pedidos/remover/{{$pedido->pedido_id}}/{{$pedido->produto_id}}" class="btn btn-sm btn-danger">Remover</a> </td>
               </tr>
            @php
            $i++;   
            @endphp
        @endforeach
    </table>
    
      
    </table>
    </div>
</div>
@endsection