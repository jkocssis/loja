<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Vendedor extends Model
{
    use Notifiable;

    /**
    * The primary key associated with the table.
    *
    * @var string
    */
       
   protected $primaryKey = 'idVendedor';

   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
       'cpf', 'nome', 'endereco', 'cidade', 'cep', 'uf', 'tel_ddd', 'tel_num', 'sal_base', 'taxa_com',
   ];

   public function relPedido() {
       return $this->hasMany('App\Models\Pedido', 'idVendedor', 'idVendedor');
   }
}
