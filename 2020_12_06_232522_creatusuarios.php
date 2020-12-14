<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class Creatusuarios extends Migration
{

    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('idUsario');
            $table->string('user', 200);
            $table->string('password', 255);
            $table->string('key', 250);
            $table->timestamps();
        }); 
    }

    public function down()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            Schema::dropIfExists('usuarios');
        });
    }
}
