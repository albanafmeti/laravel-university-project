<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use App\Faculty;

class BranchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {

            $faculty = Faculty::all()->random(1);

            DB::table('branches')->insert([
                'name' => "Branch of " . $faker->unique()->city,
                'faculty_id' => $faculty->id,
                'created_at' => $faker->dateTime($max = 'now'),
                'updated_at' => $faker->dateTime($max = 'now'),
            ]);
        }
    }
}