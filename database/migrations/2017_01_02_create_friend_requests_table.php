<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FriendRequestsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('friend_requests', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->bigInteger('user_id')->unsigned();
      $table->bigInteger('friend_id')->unsigned();
      $table->boolean('accepted');
      $table->timestamps();

      //foreign keys
      $table->foreign('user_id')->references('id')->on('users');
      $table->foreign('friend_id')->references('id')->on('users');

    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('friend_requests');
  }
}
