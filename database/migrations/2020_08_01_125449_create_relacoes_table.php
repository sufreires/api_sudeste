<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacoes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dosagem');
            $table->integer('id_produto')->unsigned();
            $table->foreign('id_produto')->references('id')->on('produtos');
            $table->integer('id_cultura')->unsigned();
            $table->foreign('id_cultura')->references('id')->on('culturas');
            $table->integer('id_praga')->unsigned();
            $table->foreign('id_praga')->references('id')->on('pragas');

            $table->timestamps();
        });

        DB::table('relacoes')->insert(
            array(
                'dosagem' => '100',
                'id_produto' => '1',
                'id_cultura' => '1',
                'id_praga' => '1',
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relacoes');
    }
}
