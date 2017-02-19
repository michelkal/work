<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Gethelps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gethelps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('ph_id');
            $table->string('amount');
            $table->string('currency_id');
            $table->string('growth');
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
        Schema::dropIfExists('gethelps');
    }
}
