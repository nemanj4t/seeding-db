<?php

use Illuminate\Database\Seeder;
use App\Student;
use App\Parents;

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
            $parent = factory(App\Parents::class)->make();
            $parent->last_name = $student->last_name;
            $student->middle_name = $parent->first_name;
            $parent->save();
            $student->save();
            if(rand(0, 10) > 7) {
                $student->parents()->attach($parent, [
                    'relationship_type_code' => 3
                ]);
            } else {
                $student->parents()->attach($parent, [
                    'relationship_type_code' => ($parent->gender === 'male' ? 1 : 2)
                ]);
            }
        }
    }
}
