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
        $this->call([
            ProfileSeeder::class,
            MessageSeeder::class,
            TecnologySeeder::class,
            AbilitySeeder::class,
            ProjectSeeder::class,
            SkillSeeder::class,
            EducationSeeder::class,
            ArgomentSeeder::class,
            ExpSeeder::class,
            MansionSeeder::class,
            ScreenSeeder::class
    ]);
    }
}
