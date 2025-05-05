<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Experience::create([
            'job_start' => '2022-01-01',
            'job_end' => '2022-12-01',
            'company_name' => 'Erciyes Teknoapark - Kayseri',
            'job_description' => 'Yazılım Geliştirme, Proje Yönetimi, Veri Tabanı Yönetimi, Web Geliştirme, Mobil Uygulama Geliştirme, Test Yönetimi, Yazılım Mühendisliği, Proje Yönetimi',
        ]);
    }
}
