<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('role_id')->index()->unsigned()->nullable();
            $table->integer('is_active')->default(0);
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('address');
            $table->string('zipcode');
            $table->string('city');
            $table->string('phone');
            $table->timestamp('age');
            $table->string('voice');
            $table->string('experience');
            $table->string('choir_type');
            $table->string('job');
            $table->string('relate');
            $table->string('persona');
            $table->integer('user_status')->index()->unsigned()->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
