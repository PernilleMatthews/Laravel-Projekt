<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class person extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 40);
            // $table->foreign('name')->references('name')->on('rekvirent');
            $table->string('initialer', 16)->unique();
            $table->foreign('initialer')->references('initialer')->on('rekvirent')->onDelete('cascade');
            $table->string('email', 191)->unique();
            $table->Integer('telefon')->unique();
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
