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
            $table->string('amount');
            $table->string('reference');
            $table->string('currency_id');
            $table->integer('progress');
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
        Schema::dropIfExists('providehelps')
    }
}
