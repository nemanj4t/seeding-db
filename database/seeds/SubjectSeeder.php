<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Subject::class, 10)->create()->each(function ($subject) {
            $number_of_students = random_int(15, 50);
            $students = App\Student::inRandomOrder()->take($number_of_students)->get();
            foreach($students as $student) {
                $subject->students()->attach($student,
                    [
                        'date_of_registration' => now(),
                        'date_of_first_class' => now(),
                        'date_of_last_class' => now()
                    ]);
            }
        });
    }
}
