<?php

use Illuminate\Database\Seeder;

class StudentAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = App\Student::all();
        foreach ($students as $student) {
            $student->student_addresses()->save(factory(App\StudentAddress::class)->make());
        }
    }
}
