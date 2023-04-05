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
            $table->id();
            $table->string('naam');
            $table->string('soort')->default('Onbekend');
            $table->string('image')->default('/img/overig.jpg');
            $table->string('image640')->default('/img/overig640.webp');
            $table->string('image1280')->default('/img/overig1280.webp');
            $table->string('image1920')->default('/img/overig1920.webp');
            $table->string('wanneer');
            $table->float('uurtarief');
            $table->integer('hoelang');
            $table->unsignedBigInteger('user_id');
            $table->foreign("user_id")->references("id")->on("users");
            $table->string('beschrijving')->nullable();
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('huisdier', function (Blueprint $table) {
            $table->dropForeign('huisdier_user_id_foreign');
        });
        Schema::dropIfExists('huisdier');
    }
}
