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
            $table->integer('team_id')->nullable()->unsigned();
            $table->foreign('team_id')->references('id')->on('teams');
            $table->string('name');
            $table->enum('handedness', ['left', 'right'])->default('right');
            $table->enum('speciality', ['allrounder', 'batsman', 'wicketkeeper', 'bowler-seam-fast'])->nullable();
            $table->string('country')->nullable();
            $table->string('nationality')->nullable();
            $table->string('photo')->nullable();
            $table->integer('rank')->comment('rankings for the player');
            $table->softDeletesTz();
            $table->timestampsTz();
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
