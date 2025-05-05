<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'social_media_name' => 'LinkedIn',
            'social_media_link' => 'https://www.linkedin.com/in/aydinliramazan/',
         
        ]);
        Contact::create([
            'social_media_name' => 'Instagram',
            'social_media_link' => 'https://www.instagram.com/aydnlramazan/#',
           
        ]);
        Contact::create([
            'social_media_name' => 'Pexels',
            'social_media_link' => 'https://www.pexels.com/tr-tr/@ramazan-aydinli-279243382/',

        ]);
    }
}
