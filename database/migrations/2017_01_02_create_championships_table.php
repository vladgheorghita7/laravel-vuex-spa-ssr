<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChampionshipsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('championships', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('title', 50)->unique();

      // foreign
      $table->integer('country_id')->unsigned();
      $table->integer('championship_type_id')->unsigned();
      $table->integer('year_id')->unsigned();
      $table->timestamps();

      //foreign keys
      $table->foreign('country_id')->references('id')->on('countries');
      $table->foreign('championship_type_id')->references('id')->on('championship_types');
      $table->foreign('year_id')->references('id')->on('years');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('championships');
  }
}
