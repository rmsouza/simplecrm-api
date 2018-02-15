<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContatoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contato', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email', 150)->nullable();
            $table->string('nome', 100);
            $table->string('sobrenome', 100)->nullable();
            $table->integer('nivelInfluencia');
            $table->integer('conta_id')->unsigned();
            $table->foreign('conta_id')
                ->references('id')
                ->on('conta')
                ->onDelete('restrict');
            $table->integer('cargo_id')->unsigned()->nullable();
            $table->foreign('cargo_id')
                ->references('id')
                ->on('cargo')
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
        Schema::dropIfExists('contato');
    }
}
