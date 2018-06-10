<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralconfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generalconfig', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('logo', 255);
            $table->string('logo2', 255);
            $table->string('favicon', 255)->nullable();
            $table->string('footer', 255)->nullable();
            $table->text('short_about')->nullable();
            $table->text('short_services')->nullable();
            $table->text('short_blog')->nullable();
            $table->text('short_faq')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('google_analytics')->nullable();
            $table->text('about')->nullable();
            $table->text('address')->nullable();
            $table->string('phone1', 25)->nullable();
            $table->string('phone2', 25)->nullable();
            $table->string('mobile', 25)->nullable();
            $table->string('fax', 25)->nullable();
            $table->string('website', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->boolean('reset_password')->default(false);
            $table->string('theme', 24)->nullable();
            $table->string('welcome', 155)->nullable();
            $table->string('facebook', 155)->nullable();
            $table->string('whatsapp', 155)->nullable();
            $table->string('viber', 155)->nullable();
            $table->string('skype', 155)->nullable();
            $table->string('linkedin', 155)->nullable();
            $table->string('twitter', 155)->nullable();
            $table->string('instagram', 155)->nullable();
            $table->string('google', 155)->nullable();
            $table->string('youtube', 155)->nullable();
            $table->string('vimeo', 155)->nullable();
            $table->text('useterms')->nullable();
            $table->text('privacypolicy')->nullable();
            $table->float('latitude', 15, 10)->default(0.0);
            $table->float('longitude', 15, 10)->default(0.0);
            $table->string('copyright', 255)->nullable();
            $table->string('lang', 2)->nullable();
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
        Schema::dropIfExists('generalconfig');
    }
}
