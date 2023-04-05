<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table ->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table ->unsignedBigInteger('huisdier_id');
            $table->foreign('huisdier_id')->references('id')->on('huisdier')->onDelete('cascade');
            $table ->unsignedBigInteger('oppasser_id');
            $table->foreign('oppasser_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign('orders_user_id_foreign');
            $table->dropForeign('orders_huisdier_id_foreign');
            $table->dropForeign('orders_oppasser_id_foreign');
        });
        Schema::dropIfExists('orders');
    }
}
