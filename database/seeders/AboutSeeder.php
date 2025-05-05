<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'name'=>'Ramazan AYDINLI',
            'birthday'=>'1998-01-01',
            'phone_number'=>'+90 551 590 20 58',
            'email'=>'dvpramazanaydinli@gmail.com',
            'website'=>'https://ramazanaydinli.com',
            'address'=>'İstanbul, Türkiye'
        ]);
    }
}
