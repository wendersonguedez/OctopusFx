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
        Schema::create('movimentos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome');
            $table->string('descricao');
            $table->date('data_vencimento');
            $table->date('data_movimento');
            $table->double('valor');
            $table->char('tipo_movimento', 1);
            $table->char('status', 1);
            $table->foreignId('forma_pagamento_id');
            $table->foreignId('user_id');
            $table->foreignId('categoria_id');
            $table->foreign('forma_pagamento_id')->references('id')->on('forma_pagamento');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('categoria_id')->references('id')->on('categorias');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimentos');
    }
};
