<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesChargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_charges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('parking_charges')->nullable();
            $table->string('extra_day_charges')->nullable();
            $table->string('car_wash_ext')->nullable();
            $table->string('car_wash_int')->nullable();
            $table->string('car_wash_com')->nullable();
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
        Schema::table('services_charges', function (Blueprint $table) {
            //
        });
    }
}
