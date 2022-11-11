<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContatoMigrates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contato', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nome');
            $table->text('email');
            $table->text('telefone');
            $table->text('mensagem');
            $table->integer('id_imovel');
            $table->integer('tipo')->comment('0 = Imóvel 1 = Lancamento');
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
        //
    }
}
