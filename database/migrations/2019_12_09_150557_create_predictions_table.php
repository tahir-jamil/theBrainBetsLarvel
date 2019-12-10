<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePredictionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predictions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('match_id');
            $table->string('user_id');
            $table->string('Match');
            $table->string('1x2');
            $table->string('1x2ht');
            $table->string('ou05');
            $table->string('ou15');
            $table->string('ou25');
            $table->string('ou05ht');
            $table->string('ou15ht');
            $table->string('ggng');
            $table->string('result');
            $table->string('double_change');
            $table->string('status_id');
            $table->timestamps();
        });
    }

    /**`
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('predictions');
    }
}
