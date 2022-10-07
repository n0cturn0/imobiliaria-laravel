<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ImovelMigrate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imovel_fotos', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('id_lancamento');
            $table->text('foto_name');
            $table->text('foto_descricao')->nullable();
            $table->integer('destaque')->comment('0 = Sim 1 = não')->default('0');
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
