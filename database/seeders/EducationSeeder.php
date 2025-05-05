<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Education::create([
            'education_start' => '2017-09-01',
            'education_end' => '2021-06-01',
            'school_name' => 'Anadolu Üniversitesi - Eskişehir',
            'school_description' => 'Bilgisayar Programcılığı Önlisans Eğitimi',
        ]);
    }
}
