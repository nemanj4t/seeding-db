<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Student::class, 1000)->create()->each(function($student) {
            $student->payment_methods()->save(factory(App\StudentPaymentMethod::class)->make());
        });
    }
}
