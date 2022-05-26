<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'application_name' => "PARKMEⓟ - parking aeroport toulouse",
            'description' => "PARKME: Aéroport Toulouse Blagnac. ✓+3000 réservations ✓24/7 service client ✓Paiement sécurisé",
            'keywords' => "Place de parking à Toulouse",
            'application_logo' => "https://parkme.fr/public/assets/images/logo.svg",
            'admin_email' => "contact@parkme.fr",
            'contact' => "05 31 60 25 25",
            'currency' => "€",
            'copyright' => '© 2021 <a class="newftparkme" href="https://www.parkme.fr">Parkme</a>',
            'promo_text' => "Bienvenue ! Premier jour à 14,99€ puis 5€/jour",
            'og_image' => "https://parkme.fr/public/uploads/favicon.ico",
            'og_description' => "PARKME: Aéroport Toulouse Blagnac. ✓+3000 réservations ✓24/7 service client ✓Paiement sécurisé",
            'og_title' => "PARKMEⓟ - parking aeroport toulouse",
            'fb_link' => "https://www.facebook.com/parkmeblagnac/",
            'insta_link' => "https://www.instagram.com/parkmeaeroportblagnac/"
        ]);
    }
}
