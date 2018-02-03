<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('sigla', 10);
            $table->string('site', 100);
            $table->string('endereco', 150);
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')
                ->references('id')
                ->on('usuario')
                ->onDelete('restrict');
            $table->integer('cidade_id')->unsigned();
            $table->foreign('cidade_id')
                ->references('id')
                ->on('cidade')
                ->onDelete('restrict');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conta');
    }
}
