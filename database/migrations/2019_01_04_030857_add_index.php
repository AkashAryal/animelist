<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIndex extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::table('anime_lists', function (Blueprint $table) {
      $table->index('username');
    });

    Schema::table('anime_recommendations', function (Blueprint $table) {
      $table->index('anime');
    });

    Schema::table('picture_urls', function (Blueprint $table) {
      $table->index('anime');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::table('users', function (Blueprint $table) {
       $table->dropIndex(['username']);
    });

    Schema::table('anime_recommendations', function (Blueprint $table) {
      $table->dropIndex(['anime']);
    });

    Schema::table('picture_urls', function (Blueprint $table) {
      $table->dropIndex(['anime']);
    });

  }
}
