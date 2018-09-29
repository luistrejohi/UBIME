<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePulserasUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pulseras_users', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pulsera_id');
            $table->unsignedInteger('owner_id');
            $table->unsignedInteger('permited_user');
            $table->timestamps();

            $table->foreign('pulsera_id')->references('id')->on('pulseras');
            $table->foreign('owner_id')->references('id')->on('users');
            $table->foreign('permited_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pulseras_users');
    }
}
