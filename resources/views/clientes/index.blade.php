@extends('app.index',["current" => "clientes"])


@section('body')
<div class="card">     
        <div class="card-body">
           <h3>Todos os Clientes </h3>
           @if(count($clientes)>0)
           <table class="table table-hover">
               <thead>
               <tr>
                   <th scope="col">ID</th>
                   <th scope="col">Nome</th>
                   <th scope="col">CNPJ</th>
                   <th scope="col">Ações</th>
               </tr>
               </thead>
               <tbody>
               @foreach ($clientes as $cliente)
               <tr>
                  <td> {{$cliente->id}}</td> 
                  <td> {{$cliente->name}}</td> 
                  <td> {{$cliente->cnpj}} </td>
                  <td><a href="/clientes/editar/{{$cliente->id}}" class="btn btn-sm btn-warning">Editar</a>     <a href="/clientes/apagar/{{$cliente->id}}" class="btn btn-sm btn-danger">Deletar</a> </td>
               </tr>
               @endforeach
               </tbody>
           </table>
           @else
                Nenhum cliente encontrado em nossos registros.
           @endif
           <hr>
           <a href="/clientes/novo" class="btn btn-sm btn-success"> Criar novo Cliente </a>
        </div>
</div>
@endsection
