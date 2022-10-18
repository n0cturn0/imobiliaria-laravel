<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpreedimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empreedimentos', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->timestamps();
            $table->text('nome_empreedimento');
            $table->text('banner_lancamento');
            $table->integer('status')->comment('0 = ativo 1 = desativado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empreedimentos');
    }
}
