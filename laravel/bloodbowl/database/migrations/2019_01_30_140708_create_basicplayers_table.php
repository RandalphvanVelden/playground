<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasicplayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basicplayers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('team');
            $table->text('position');
            $table->integer('cost');
            $table->integer('qty')->nullable();
            $table->integer('move');
            $table->integer('strength');
            $table->integer('agility');
            $table->integer('armour');
            $table->text('skills')->nullable();
            $table->text('skillChoiceSingleA')->nullable();
            $table->text('skillChoiceSingleB')->nullable();
            $table->text('skillChoiceSingleC')->nullable();
            $table->text('skillChoiceDoubleA')->nullable();
            $table->text('skillChoiceDoubleB')->nullable();
            $table->text('skillChoiceDoubleC')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('basicplayers');
    }
}
