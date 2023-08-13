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
        Schema::create('clientes', function (Blueprint $table) {
            
            $table->id();
            $table->string('nome', 255);
            $table->string('cpf', 11);
            $table->string('telefone', 13);
            $table->string('cep', 8);
            $table->bigInteger('id_estado')->unsigned();
            $table->foreign('id_estado')->references('id')->on('estados');
            $table->string('cidade', 255);
            $table->string('logradouro', 255);
            $table->string('bairro', 255);
            $table->integer('numero');
            $table->string('complemento', 255)->nullable();
            $table->char('entRet', 1);
            $table->bigInteger('id_sabor')->unsigned();
            $table->foreign('id_sabor')->references('id')->on('sabores');
            $table->string('observacao', 255)->nullable();
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
        // Schema::table('clientes', function (Blueprint $table) { });

    }
    
};
