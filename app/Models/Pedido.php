<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Pedido extends Model
{

    use Notifiable;

    /**
    * The primary key associated with the table.
    *
    * @var string
    */
       
   protected $primaryKey = 'idPedido';

   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
        'idCliente', 'idVendedor', 'status',
   ];

    public function relCliente() {
        return $this->hasOne('App\Models\Cliente', 'idCliente', 'idCliente');
    }

    public function relVendedor() {
        return $this->hasOne('App\Models\Vendedor', 'idVendedor', 'idVendedor');
    }

    public function relitemPedido() {
        return $this->hasMany('App\Models\itemPedido', 'idPedido', 'idPedido');
    }
}
