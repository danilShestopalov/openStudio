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
        \Illuminate\Database\Eloquent\Model::unguard();

        $this->call(SkillsTableSeeder::class);
        $this->call(ProfessionsTableSeeder::class);

        \Illuminate\Database\Eloquent\Model::reguard();
    }
}
