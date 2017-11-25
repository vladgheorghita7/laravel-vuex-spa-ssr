<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('home_team_id')->unsigned();
            $table->bigInteger('away_team_id')->unsigned();
            $table->integer('home_score')->default(-1);
            $table->integer('away_score')->default(-1);
            $table->dateTime('date');
            $table->integer('match_type_id')->unsigned();
            $table->bigInteger('championship_id')->unsigned();
            $table->timestamps();


            //foreign keys
            $table->foreign('home_team_id')->references('id')->on('teams');
            $table->foreign('away_team_id')->references('id')->on('teams');
            $table->foreign('match_type_id')->references('id')->on('match_types');
            $table->foreign('championship_id')->references('id')->on('championships');
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
