<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOppasvraagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oppasvraag', function (Blueprint $table) {
            $table->id("oppasvraagId");
            $table->unsignedBigInteger('userId');
            $table->foreign('userId')->references('id')->on('users');
            $table->dateTime("beginDatum");
            $table->dateTime("eindDatum");
            $table->text("Omschrijving");
            $table->text("belangrijk");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('oppasvraag', function(Blueprint $table) {
            $table->dropForeign('oppasvraag_userId_foreign');
        });
        Schema::dropIfExists('oppasvraag');
    }
}
