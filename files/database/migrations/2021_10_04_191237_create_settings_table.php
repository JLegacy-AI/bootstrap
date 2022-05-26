<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('application_name')->nullable();
            $table->text('description')->nullable();
            $table->text('keywords')->nullable();
            $table->string('application_logo')->nullable();
            $table->string('admin_email')->nullable();
            $table->string('contact')->nullable();
            $table->string('currency')->nullable();
            $table->string('copyright')->nullable();
            $table->string('promo_text')->nullable();
            $table->string('og_image')->nullable();
            $table->string('og_description')->nullable();
            $table->string('og_title')->nullable();
            $table->string('fb_link')->nullable();
            $table->string('insta_link')->nullable();
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
        Schema::table('settings', function (Blueprint $table) {
            //
        });
    }
}
