<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acao', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data');
            $table->time('horario');
            $table->text('descricao')->nullable();
            $table->string('status', 30);
            $table->integer('oportunidade_id')->unsigned();
            $table->foreign('oportunidade_id')
                ->references('id')
                ->on('oportunidade')
                ->onDelete('restrict');

            $table->integer('contato_id')->unsigned()->nullable();
            $table->foreign('contato_id')
                ->references('id')
                ->on('contato')
                ->onDelete('restrict');

            $table->integer('tipoacao_id')->unsigned();
            $table->foreign('tipoacao_id')
                ->references('id')
                ->on('tipoacao')
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
        Schema::dropIfExists('acao');
    }
}
