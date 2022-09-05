<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLancamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lancamentos', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->timestamps();
            $table->text('nome');
            $table->integer('status');
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
            $table->float('metrosconst');
            $table->float('valor');
            $table->text('descricao');
        });

        Schema::create('lancamentos_fotos', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('id_lancamento');
            $table->text('foto_name');
            $table->text('foto_descricao');
            $table->integer('destaque')->comment('0 = Sim 1 = não');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lancamentos');
    }
}
