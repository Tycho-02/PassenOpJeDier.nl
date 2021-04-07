<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOppasserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oppasser', function (Blueprint $table) {
            $table->unsignedBigInteger('userId')->unique();
            $table->foreign('userId')->references('userId')->on('users');
            $table->text('omschrijving');
            $table->float('uurtarief', 8, 2);
            $table->boolean('hond')->default(false);
            $table->boolean('kat')->default(false);
            $table->boolean('cavia')->default(false);
            $table->boolean('hamster')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('oppasser', function(Blueprint $table) {
            $table->dropForeign('oppasser_userId_foreign');
        });
        Schema::dropIfExists('oppasser');
    }
}
