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
            $table->string('name', 50);
            $table->string('email',50)->unique();
            $table->string('username',50)->unique();
            $table->string('password', 250);
            $table->char('gender', 1);
            $table->string('phone',20)->nullable();
            $table->string('country',20)->nullable();
            $table->string('city',20)->nullable();
            $table->string('refer_id',50);
            $table->integer('refered_by')->nullable();
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
