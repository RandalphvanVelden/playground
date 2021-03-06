<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('team_id')->unsigned();
            $table->foreign('team_id')->references('id')->on('teams'); 
            $table->integer('playernr');
            $table->text('name')->nullable();
            $table->text('position')->nullable();
            $table->integer('cost')->nullable();
            $table->integer('move')->nullable();
            $table->integer('strength')->nullable();
            $table->integer('agility')->nullable();
            $table->integer('armour')->nullable();
            $table->text('skills')->nullable();
            $table->text('extraSkillA')->nullable();
            $table->text('extraSkillB')->nullable();
            $table->text('extraSkillC')->nullable();
            $table->text('extraSkillD')->nullable();
            $table->text('extraSkillE')->nullable();
            $table->text('extraSkillF')->nullable();
            $table->boolean('missingNextGame')->default(false);
            $table->integer('niglingInjury')->nullable();
            $table->integer('completions')->nullable();
            $table->integer('touchdown')->nullable();
            $table->integer('intercept')->nullable();
            $table->integer('casualtie')->nullable();
            $table->integer('mvp')->nullable();
            $table->integer('ssp')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
