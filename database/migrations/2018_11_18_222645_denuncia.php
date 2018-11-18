<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Denuncia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('denuncia', function (Blueprint $table) {
            $table->increments('id')->nullable();
            $table->string('observacao');
            $table->string('descricao');
            $table->string('rua');
            $table->integer('numero');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('nm_imagem');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('denuncia');
    }
}
