@extends('app.index',["current" => "produtos"])
@section('body')
<div class="card">     
        <div class="card-body">
            <h3 class="title-card">Criar Produtos</h3>
            <hr>
            <form action="/produtos" method="POST">
            @csrf
            <p>Nome :<input type="text" name="name" class="form-control"  required></p>
            <p>Valor : <input type="number" name="valor" class="form-control" required></p>
            <p><button type="submit" class="btn btn-md  btn-success">Salvar</button></p>
            </form>
        </div>
</div>
@endsection