<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reservation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lokale', 8);
            $table->datetime('datotid');
            $table->string('rekvirent', 16);
            $table->unique(['lokale', 'datotid']);
            $table->unique(['rekvirent', 'datotid']);
            $table->foreign('lokale')->references('lokalebetegnelse')->on('lokale');
            $table->foreign('rekvirent')->references('initialer')->on('rekvirent');
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
        Schema::dropIfExists('reservation');
    }
}
