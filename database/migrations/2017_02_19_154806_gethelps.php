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
            $table->string('amount', 100);
            $table->string('currency_id', 50);
            $table->string('growth', 50);
            $table->integer('match');
            $table->integer('match_with');
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
