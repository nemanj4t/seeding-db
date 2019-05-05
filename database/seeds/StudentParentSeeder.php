<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentParentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = Student::all();
        foreach ($students as $student) {
            $student->parent()->save(factory(App\StudentParent::class)->make());
        }
    }
}
