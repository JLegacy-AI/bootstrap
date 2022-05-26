<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AirportTableSeeder::class);
        $this->call(ServiceChargesTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(TimeslotTableSeeder::class);
    }
}
