<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOppasvraagIdToAanvragenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('aanvragen', function (Blueprint $table) {
            $table->unsignedBigInteger("oppasvraagId");
            $table->foreign("oppasvraagId")->references('oppasvraagId')->on('oppasvraag');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('aanvragen', function (Blueprint $table) {
            $table->dropForeign('aanvragen_oppasvraagId_foreign');
        });
    }
}
