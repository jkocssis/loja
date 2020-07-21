<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendedors', function (Blueprint $table) {
            $table->bigIncrements('idVendedor');
            $table->string('cpf', 15);
            $table->string('nome', 150);
            $table->string('endereco', 300);
            $table->string('cidade', 150);
            $table->string('cep', 10);
            $table->string('uf', 5);
            $table->integer('tel_ddd');
            $table->string('tel_num');
            $table->float('sal_base');
            $table->float('taxa_com');
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
        Schema::dropIfExists('vendedors');
    }
}
