<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Produto extends Model
{
    use Notifiable;

    /**
    * The primary key associated with the table.
    *
    * @var string
    */
       
   protected $primaryKey = 'idProduto';

   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
       'descricao', 'quant_disp', 'preco_unit', 'estoque_min', 'image',
   ];

   public function relitemPedido() {
        return $this->hasOne('App\Models\itemPedido', 'idProduto', 'idProduto');
   }
}
