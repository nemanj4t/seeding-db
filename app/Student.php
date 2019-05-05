<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\StudentPaymentMethod;

class Student extends Model
{
    public $timestamps = false;

    public function payment_methods()
    {
        return $this->hasMany(StudentPaymentMethod::class , 'student_id');
    }

    public function student_addresses()
    {
        return $this->hasMany(StudentAddress::class, 'student_id');
    }

    public function parent()
    {
        return $this->hasOne(StudentParent::class, 'student_id');
    }

    public function subjects()
    {
        return $this->belongsToMany(StudentSubject::class, 'student_subject','student_id', 'subject_id');
    }

    public function parents()
    {
        return $this->belongsToMany(StudentParent::class, 'student_parent','student_id', 'parent_id');
    }
}
