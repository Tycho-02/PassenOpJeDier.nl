<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHuisdierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huisdier', function (Blueprint $table) {
            $table->unsignedBigInteger('userId')->unique();
            $table->foreign('userId')->references('id')->on('users');
            $table->string("naam");
            $table->integer("leeftijd");
            $table->text("eigenschappen");
            $table->text("omschrijving");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('huisdier');
    }
}
