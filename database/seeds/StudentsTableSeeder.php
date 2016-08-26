<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use App\Branch;

class StudentsTableSeeder extends Seeder
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

            $branch = Branch::all()->random(1);

            DB::table('students')->insert([
                'firstname' => $faker->firstName(),
                'lastname' => $faker->lastName(),
                'birthday' => $faker->date(),
                'branch_id' => $branch->id,
                'created_at' => $faker->dateTime($max = 'now'),
                'updated_at' => $faker->dateTime($max = 'now'),
            ]);
        }
    }
}