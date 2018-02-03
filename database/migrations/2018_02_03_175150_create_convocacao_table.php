<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConvocacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convocacao', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status', 30);
            $table->date('dataConvocacao');
            $table->integer('acao_id')->unsigned();
            $table->foreign('acao_id')
                ->references('id')
                ->on('acao')
                ->onDelete('restrict');
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')
                ->references('id')
                ->on('usuario')
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
        Schema::dropIfExists('convocacao');
    }
}
