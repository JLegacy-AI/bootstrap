<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class ServiceChargesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services_charges')->insert([
            'parking_charges' => 15.99,
            'extra_day_charges' => 6.99,
            'car_wash_ext' => 30,
            'car_wash_int' => 40,
            'car_wash_com' => 50,
        ]);
    }
}
