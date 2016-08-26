<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UniversitiesTableSeeder::class);
        $this->call(FacultiesTableSeeder::class);
        $this->call(BranchesTableSeeder::class);
        $this->call(StudentsTableSeeder::class);

        Model::reguard();
    }
}
