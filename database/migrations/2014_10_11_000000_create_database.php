<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //DB::getConnection()->statement('CREATE DATABASE :schema', ['schema' => env('DB_DATABASE', 'paksharereplica')]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //DB::getConnection()->statement('DROP DATABASE :schema', ['schema' => env('DB_DATABASE', 'paksharereplica')]);
    }
}
