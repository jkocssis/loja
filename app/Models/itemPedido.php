<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class itemPedido extends Model
{
    
    use Notifiable;

    /**
    * The primary key associated with the table.
    *
    * @var string
    */
        
   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
        'idPedido', 'idProduto', 'quant_vend',
   ];

    public function relPedido() {
        return $this->hasOne('App\Models\Pedido', 'idPedido', 'idPedido');
    }

    public function relProduto() {
        return $this->hasOne('App\Models\Produto', 'idProduto', 'idProduto');
    }
}
