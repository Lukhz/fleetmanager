<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Relationen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('ships', function (Blueprint $table) {
            $table->integer('modell_id')->nullable();
        });
        Schema::table('modells', function (Blueprint $table) {
            $table->integer('hersteller_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hersteller_ship');
        Schema::dropIfExists('modell_ship');
    }
}
