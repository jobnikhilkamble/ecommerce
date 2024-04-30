<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('email', 200);
            $table->string('password', 60);
            $table->integer('type');
            $table->string('firstname', 50);
            $table->string('lastname', 50);
            $table->text('address');
            $table->string('contact_info', 100);
            $table->string('photo', 200);
            $table->integer('status');
            $table->string('activate_code', 15);
            $table->string('reset_code', 15);
            $table->date('created_on');
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
