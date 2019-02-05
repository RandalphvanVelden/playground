<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('name');
            $table->text('race');
            $table->integer('userId')->unsigned();
            $table->foreign('userId')->references('id')->on('users'); 
            $table->integer('reroll')->nullable();
            $table->integer('rerollValue')->nullable();
            $table->integer('fanfactor')->nullable();
            $table->integer('assistantCoach')->nullable();
            $table->integer('cheerleader')->nullable();
            $table->integer('apothecary')->nullable();
            $table->integer('teamValue')->nullable();
            $table->integer('treasury')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
