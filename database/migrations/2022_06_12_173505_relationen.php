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
        Schema::create('hersteller_ship', function (Blueprint $table) {
            $table->id();
            $table->integer('hersteller_id')->nullable();
            $table->integer('ship_id')->nullable();
            $table->timestamps();
        });
        Schema::create('modell_ship', function (Blueprint $table) {
            $table->id();
            $table->integer('modell_id')->nullable();
            $table->integer('ship_id')->nullable();
            $table->timestamps();
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
