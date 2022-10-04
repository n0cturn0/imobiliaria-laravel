<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Imovel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imovel', function (Blueprint $table)
        {
            $table->id()->autoIncrement();
        
            $table->timestamps();
            $table->text('titulo');
            $table->integer('status')->default('1');
            $table->integer('lancamento_status')->comment('0 = Planta 1 = Pronto');
            $table->string('estado');
            $table->string('cidade');
            $table->string('bairro');
            $table->string('rua');
            $table->integer('numero');
            $table->integer('ruapavimentada')->comment('0 = Sim 1 = Não');
            $table->integer('tipo')->comment('0 = Apartamento 1 = Casa Térrea 2 = Sobrado 3 = Casa condominio 4 = Sobrado Condominio 5 Terreno');
            $table->integer('banheiro');
            $table->integer('suite');
            $table->integer('garagem');
            $table->integer('quarto');
            $table->string('metrosconst');
            $table->string('valor');
            $table->text('descricao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
