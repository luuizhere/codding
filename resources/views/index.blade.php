@extends('app.index',["current" => "home"])
@section('body')
<div class="card">     
        <div class="card-body">
            <div style="text-align:center;">
                <img src="http://www.codding.com.br/img/template/logotipo_codding.fw.png" alt="">
            </div>
            <div style="text-align:center;">
                <hr>
                <u> Desenvolvido Por Luiz Gustavo Araujo  -  {{date('d/m/Y H:i')}} </u>
            </div>
        </div>
</div>
@endsection