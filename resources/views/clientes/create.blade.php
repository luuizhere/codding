@extends('app.index',["current" => "clientes"])
@section('body')
<div class="card">     
        <div class="card-body">
<h3>Criação de Clientes</h3>
<hr>
<form action="/clientes" method="POST">
    @csrf
    <p> Nome : <input type="text" name="name" id="name" class="form-control" placeholder="Nome do Cliente" required></p>
    <p> CNPJ : <input type="number" name="cnpj" id="cnpj" class="form-control" placeholder="CNPJ" required></p>
    <p> <button type="submit" class="btn btn-md btn-success">Salvar</button></p>
</form>
@endsection