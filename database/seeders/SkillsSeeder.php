<?php

namespace Database\Seeders;

use App\Models\Skills;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skills::create([
            'skill_name'=>'PHP',
            'skill_percentage'=>80,
        ]);
        Skills::create([
            'skill_name'=>'LARAVEL',
            'skill_percentage'=>70,
        ]);
        Skills::create([
            'skill_name'=>'HTML',
            'skill_percentage'=>85,
        ]);
        Skills::create([
            'skill_name'=>'MYSQL',
            'skill_percentage'=>90,
        ]);
        Skills::create([
            'skill_name'=>'FLUTTER',
            'skill_percentage'=> 95,
        ]);
    }
}
