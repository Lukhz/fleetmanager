<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCrewToShipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ships', function (Blueprint $table) {
            $table->float('deepness')->default(0.0);
            $table->float('decks')->default(0.0);
            $table->float('ps')->default(0.0);
            $table->float('propeller')->default(0.0);
            $table->string('patrol')->default("Schweröl");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ships', function (Blueprint $table) {
            //
            $table->dropColumn('deepness');
        });
    }
}
