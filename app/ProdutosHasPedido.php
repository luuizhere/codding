<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Produto;
use App\Pedido;
use App\Cliente;
class ProdutosHasPedido extends Model
{
    public function cliente(){
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }
    public function produto()
    {
        return $this->belongsTo(Produto::class, 'produto_id');
    }
    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'pedido_id');
    }
}
