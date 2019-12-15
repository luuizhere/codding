@extends('app.index',["current" => "pedidos"])
@section('body')
<div class="card">     
    <div class="card-body">
                <h3>Criar Pedidos</h3>
    <hr>
        <form action="/pedidos" method="post">
        @csrf
        <div class="form-group col-md-4">
        <label for="pedido">Numero do Pedido:</label>
                <input type="text" name="pedido" id="pedido"  value="{{date('Ymdhis')}}" readonly class="form-control"></p>
        </div>
                <div class="form-group col-md-4">
                Cliente :
                <select name="cliente_id" class="custom-select">
                        <option value="">Selecione</option>
                                @foreach ($clientes as $cli)
                                        <option value="{{$cli->id}}">{{$cli->name}}</option>
                                @endforeach
                </select>
        </div>       
        <div class="form-group col-md-4">
                <div id="listas">
                        Produtos <select name="produtos[]" id="produtos[]" class="custom-select"> 
                                <option value="" default >Selecione</option>
                        @foreach ($produtos as $prod)
                                <option value="{{$prod->id}}">{{$prod->name}}</option>
                        @endforeach
                        </select>
                </div>       
        </div>
        <div class="form-group col-md-4">
                        <button id="add_field" class="btn btn-sm btn-warning">Adicionar novo Produto</button>  
        </div>
        <div class="form-group col-md-4">
                <button class="btn btn-sm btn-success" type="submit">Criar Pedido</button>
        </div>
        </form>
        
    </div>
</div>
@endsection
@section('javascript')
<script>
    $(document).ready(function() {
            var campos_max          = 10;   //max de 10 campos
            var x = 1; // campos iniciais
            $('#add_field').click (function(e) {
                    e.preventDefault();     //prevenir novos clicks
                    if (x < campos_max) {
                            $('#listas').append('<div>\
                                    <p></p><select name="produtos[]" class="custom-select">\
                                         <option>Selecione</option>\
                                    @foreach ($produtos as $prod)\
                                         <option value="{{$prod->id}}">{{$prod->name}}</option>\
                                    @endforeach\
                                    </select>\
                                     <p> <a href="#" class="remover_campo">Remover</a> </p>\
                                    </div>');
                            x++;
                    }
            });

            // Remover o div anterior
            $('#listas').on("click",".remover_campo",function(e) {
                    e.preventDefault();
                    $(this).parent('div').remove();
                    x--;
            });
    });

</script>
@endsection