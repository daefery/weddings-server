<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('guest', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name', 100)->unique();
          $table->string('email', 50)->unique();
          $table->string('phone', 20);
          $table->string('attend', 10);
          $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('guest');
    }
}
