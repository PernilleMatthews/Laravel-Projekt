<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Lokale extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokale', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lokalebetegnelse', 8);
            $table->unique('lokalebetegnelse');
            $table->float('w');
            $table->float('h');
            $table->boolean('projektor')->default(1);
            $table->smallInteger('kapacitet');
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
        Schema::dropIfExists('lokale');
    }
}
