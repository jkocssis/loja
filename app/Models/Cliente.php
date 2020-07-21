<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Cliente extends Model
{
    use Notifiable;

    /**
    * The primary key associated with the table.
    *
    * @var string
    */
       
   protected $primaryKey = 'idCliente';

   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
       'cpf', 'nome', 'endereco', 'cidade', 'cep', 'uf', 'tel_ddd', 'tel_num', 'lim_cred', 'lim_disp',
   ];

   public function relPedido() {
       return $this->hasMany('App\Models\Pedido', 'idCliente', 'idCliente');
   }
}
