<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOppasserFotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oppasser_fotos', function (Blueprint $table) {
            $table->id('fotoId');
            $table->unsignedBigInteger('userId');
            $table->foreign('userId')->references('id')->on('users');
            $table->string('foto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('oppasser_fotos', function(Blueprint $table) {
            $table->dropForeign('oppasser_fotos_userId_foreign');
        });
        Schema::dropIfExists('oppasser_fotos');
    }
}
