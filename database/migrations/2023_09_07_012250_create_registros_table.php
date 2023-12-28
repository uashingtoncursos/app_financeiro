<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_pessoa');
            $table->foreign('id_pessoa')->references('id')->on('pessoas');
            $table->foreignId('id_categoria');
            $table->foreign('id_categoria')->references('id')->on('categorias');
            $table->string('descricao', 200);
            $table->string('tipo',1); //P - PAGAR | R - RECEBER
            $table->date('data_vencimento');
            $table->date('data_pagamento')->nullable();
            $table->decimal('valor', $precision = 8, $scale = 2);
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
        Schema::dropIfExists('registros');
    }
};
