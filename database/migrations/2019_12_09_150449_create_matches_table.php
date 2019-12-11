<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Match');
            $table->string('Datetime');
            $table->string('Sport');
            $table->string('Champion');
            $table->string('1');
            $table->string('X');
            $table->string('2');
            $table->string('GG');
            $table->string('NG');
            $table->string('U05');
            $table->string('O05');
            $table->string('U15');
            $table->string('O15');
            $table->string('U25');
            $table->string('O25');
            $table->string('1X');
            $table->string('X2');
            $table->string('12');
            $table->string('1HT');
            $table->string('XHT');
            $table->string('2HT');
            $table->string('U05HT');
            $table->string('O05HT');
            $table->string('U15HT');
            $table->string('O15HT');
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
        Schema::dropIfExists('matches');
    }
}
