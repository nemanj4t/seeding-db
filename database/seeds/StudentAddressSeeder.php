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
            $address = factory(App\StudentAddress::class)->make();
            $address->date_address_from = $student->date_first_rental;
            $address->date_address_to = $student->date_left_university;
            $student->student_addresses()->save($address);
        }
    }
}
