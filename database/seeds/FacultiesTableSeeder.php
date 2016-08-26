<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use App\University;

class FacultiesTableSeeder extends Seeder
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

            $university = University::all()->random(1);

            DB::table('faculties')->insert([
                'name' => "Faculty of " . $faker->unique()->city,
                'university_id' => $university->id,
                'created_at' => $faker->dateTime($max = 'now'),
                'updated_at' => $faker->dateTime($max = 'now'),
            ]);
        }
    }
}