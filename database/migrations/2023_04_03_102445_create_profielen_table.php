<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfielenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profielen', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('foto_woonkamer')->default('/img/profielFotos/default_foto_woonkamer.jpg');
            $table->string('foto_woonkamer640')->default('/img/profielFotos/default_foto_woonkamer640.webp');
            $table->string('foto_woonkamer1280')->default('/img/profielFotos/default_foto_woonkamer12801920.webp');
            $table->string('foto_woonkamer1920')->default('/img/profielFotos/default_foto_woonkamer1920.webp');
            $table->string('beschrijving_woonkamer')->default("Er is geen beschrijving beschikbaar");
            $table->string('foto_keuken')->default('/img/profielFotos/default_foto_keuken.jpg');
            $table->string('foto_keuken640')->default('/img/profielFotos/default_foto_keuken640.webp');
            $table->string('foto_keuken1280')->default('/img/profielFotos/default_foto_keuken1280.webp');
            $table->string('foto_keuken1920')->default('/img/profielFotos/default_foto_keuken1920.webp');
            $table->string('beschrijving_keuken')->default("Er is geen beschrijving beschikbaar");
            $table->string('foto_huis')->default('/img/profielFotos/default_foto_huis.jpg');
            $table->string('foto_huis640')->default('/img/profielFotos/default_foto_huis640.webp');
            $table->string('foto_huis1280')->default('/img/profielFotos/default_foto_huis1280.webp');
            $table->string('foto_huis1920')->default('/img/profielFotos/default_foto_huis1920.webp');
            $table->string('beschrijving_huis')->default("Er is geen beschrijving beschikbaar");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profielen', function (Blueprint $table) {
            $table->dropForeign('profielen_user_id_foreign');

        });
        Schema::dropIfExists('profielen');
    }
}
