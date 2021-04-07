<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSoortToHuisdierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('huisdier', function (Blueprint $table) {
            $table->string("soort");
            $table->foreign("soort")->references("soort")->on("huisdier_soorten");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('huisdier', function(Blueprint $table) {
            $table->dropForeign('huisdier_soort_foreign');
            // $table->dropColumn('soort');
        });
    }
}
