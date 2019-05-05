<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Subject::class, 50)->create()->each(function ($subject) {
            $faker = Factory::create();
            $number_of_students = random_int(15, 40);
            $students = App\Student::inRandomOrder()->take($number_of_students)->get();
            foreach($students as $student) {
                $subject->students()->attach($student,
                    [
                        'date_of_registration' => $reg = $student->date_first_rental,
                        'date_of_first_class' => $first = $faker->dateTimeBetween($reg, $student->date_left_university),
                        'date_of_last_class' => $faker->dateTimeBetween($first, $student->date_left_university),
                    ]);
            }
        });
    }
}
