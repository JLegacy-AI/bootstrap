<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "admin",
            'role_id' => 1,
            'email' => "admin@example.com",
            'email_verified_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'password' => Hash::make('admin123'),
            'airport_id' => "TLS"
        ]);
    }
}
