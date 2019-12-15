<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public function cliente(){
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }
}
