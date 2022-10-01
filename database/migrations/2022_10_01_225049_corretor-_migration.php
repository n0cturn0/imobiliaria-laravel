<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CorretorMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corretor', function (Blueprint $table)
        {
            $table->id()->autoIncrement();
            $table->timestamps();   
            $table->text('corretor_nome');
            $table->text('corretor_foto');
            $table->text('email');
            $table->text('telefone');
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
        //
    }
}
