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
            $table->string('game');
            $table->string('datetime');
            $table->string('sport_id');
            $table->string('champion_id');
            $table->string('v1');
            $table->string('x');
            $table->string('v2');
            $table->string('v1ht');
            $table->string('vht');
            $table->string('v2ht');
            $table->string('o05');
            $table->string('u05');
            $table->string('o15');
            $table->string('u15');
            $table->string('o25');
            $table->string('u25');
            $table->string('o05ht');
            $table->string('u05ht');
            $table->string('o15ht');
            $table->string('u15ht');
            $table->string('gg');
            $table->string('ng');
            $table->string('v1x');
            $table->string('x2');
            $table->string('v12');
            $table->string('result');
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
