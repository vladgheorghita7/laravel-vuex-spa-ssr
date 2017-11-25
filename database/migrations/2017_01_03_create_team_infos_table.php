<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TeamInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('championship_id')->unsigned();
            $table->bigInteger('team_id')->unsigned();
            $table->integer('points')->default(0);
            $table->integer('wins')->default(0);
            $table->integer('draws')->default(0);
            $table->integer('losses')->default(0);
            $table->timestamps();

            //foreign keys
            $table->foreign('championship_id')->references('id')->on('championships');
            $table->foreign('team_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team_infos');
    }
}
