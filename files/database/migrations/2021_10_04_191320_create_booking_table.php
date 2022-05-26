<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable();
            $table->text('airport_id')->nullable();
            $table->string('vehicle')->nullable();
            $table->string('vehiclemodel')->nullable();
            $table->string('vehiclefaculy')->nullable();
            $table->string('start_date')->nullable();
            $table->string('start_time')->nullable();
            $table->string('end_date')->nullable();
            $table->string('end_time')->nullable();
            $table->string('car_type')->nullable();
            $table->string('service')->nullable();
            $table->string('service_type')->nullable();
            $table->string('price')->nullable();
            $table->string('parking_charges')->nullable();
            $table->string('services_charges')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('no_of_seats')->nullable();
            $table->tinyInteger('driver_status')->default(0);
            $table->string('days_difference')->nullable();
            $table->string('getResponse');
            $table->text('response_data')->nullable();
            $table->text('refund_response')->nullable();
            $table->tinyInteger('status')->default(1);
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
        Schema::table('booking_details', function (Blueprint $table) {
            //
        });
    }
}
