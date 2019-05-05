<?php

use Illuminate\Database\Seeder;
use App\Student;
class StudentPaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //foreach(Student::all() as $student) {
            factory(App\StudentPaymentMethod::class)->create();
        //}
    }
}
