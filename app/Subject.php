<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;

class Subject extends Model
{
    public $timestamps = false;

    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_subject', 'subject_id', 'student_id');
    }
}
