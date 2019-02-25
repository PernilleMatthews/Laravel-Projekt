<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rekvirent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekvirent', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 40);
            $table->string('initialer', 16)->unique();
            $table->enum('type', ['Person', 'Klasse']);
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
        Schema::dropIfExists('rekvirent');
    }
}
