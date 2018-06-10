<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailserverTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emailserver', function (Blueprint $table) {
            $table->increments('id');
            $table->string("server", 50);
            $table->integer("port")->unsigned();
            $table->string("username", 50);
            $table->string("password", 50);
            $table->boolean("ssl")->default(false);
            $table->boolean("active")->default(true);
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
        Schema::dropIfExists('emailserver');
    }
}
