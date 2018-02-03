<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformacaotiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informacaoti', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('fornecedor', 100);
            $table->integer('quantidadeLicencas');
            $table->integer('conta_id')->unsigned();
            $table->foreign('conta_id')
                ->references('id')
                ->on('conta')
                ->onDelete('restrict');
            $table->integer('modelocontratacao_id')->unsigned();
            $table->foreign('modelocontratacao_id')
                ->references('id')
                ->on('modelocontratacao')
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
        Schema::dropIfExists('informacaoti');
    }
}
