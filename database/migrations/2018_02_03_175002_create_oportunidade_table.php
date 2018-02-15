<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOportunidadeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oportunidade', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 150);
            $table->float('valor', 14, 2)->nullable();
            $table->date('dataAbertura');
            $table->date('dataFechamento')->nullable();
            $table->text('comentario')->nullable();
            $table->string('status', 30);
            $table->string('probabilidadeGanho', 50);
            $table->integer('conta_id')->unsigned()->nullable();
            $table->foreign('conta_id')
                ->references('id')
                ->on('conta')
                ->onDelete('restrict');
            $table->integer('fasevenda_id')->unsigned();
            $table->foreign('fasevenda_id')
                ->references('id')
                ->on('fasevenda')
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
        Schema::dropIfExists('oportunidade');
    }
}
