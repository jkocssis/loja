<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('idCliente');
            $table->string('cpf', 15);
            $table->string('nome', 150);
            $table->string('endereco', 300);
            $table->string('cidade', 150);
            $table->string('cep', 10);
            $table->string('uf', 5);
            $table->integer('tel_ddd');
            $table->string('tel_num');
            $table->float('lim_cred');
            $table->float('lim_disp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
