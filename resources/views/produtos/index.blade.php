@extends('app.index',["current" => "produtos"])
@section('body')
<div class="card">     
        <div class="card-body">
            <h3>Produtos</h3>
            @if(count($produtos) > 0)
                <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($produtos as $prod)
                                <tr>
                                    <th scope="row">{{$prod->id}}</th>
                                    <td>{{$prod->name}}</td>
                                    <td>R${{$prod->valor}}</td>
                                    <td> <a href="/produtos/editar/{{$prod->id}}" class="btn btn-sm btn-warning">Editar</a>     <a href="/produtos/apagar/{{$prod->id}}" class="btn btn-sm btn-danger">Deletar</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                </table>
                @else
                Nenhum Produto em nossos registros.
                @endif
            <hr>
            <a href="/produtos/novo" class="btn btn-sm btn-success"> Criar novo Produto </a>
        </div>
</div>
@endsection