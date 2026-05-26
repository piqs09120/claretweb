<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            'site_name' => 'St. Anthony Mary Claret College',
            'site_tagline' => 'Excellence in Catholic Education',
            'contact_email' => 'info@samcc.edu.ph',
            'contact_phone' => '+63 (2) 8123-4567',
            'contact_address' => '123 Claret Road, Quezon City, Metro Manila, Philippines',
            'facebook_url' => 'https://facebook.com/samcc',
            'twitter_url' => '',
            'youtube_url' => '',
            'about_summary' => 'St. Anthony Mary Claret College is a private Catholic educational institution in Quezon City, Philippines, dedicated to forming competent and value-driven professionals in the tradition of St. Anthony Mary Claret.',
        ];

        foreach ($settings as $key => $value) {
            Setting::set($key, $value);
        }

        $this->command->info('Default settings seeded!');
    }
}
