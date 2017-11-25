<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('users', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('first_name', 30);
      $table->string('last_name', 30);
      $table->string('email', 50)->unique();
      $table->string('password', 100);
      $table->boolean('admin')->default(0);
      $table->string('jwt', 100);
      $table->string('expiration_token', 100);
      $table->rememberToken();
      $table->timestamps();
      $table->date('last_login')->default(\Carbon\Carbon::now());
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('users');
  }
}
