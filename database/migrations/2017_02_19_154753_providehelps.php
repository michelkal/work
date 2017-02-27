<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Providehelps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providehelps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('amount', 100);
            $table->string('reference', 100);
            $table->string('currency_id', 100);
            $table->integer('progress');
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
        Schema::dropIfExists('providehelps');
    }
}
