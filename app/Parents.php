<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    public $timestamps = false;

    public function parents()
    {
        return $this->belongsToMany(StudentParent::class, 'student_parent','parent_id', 'student_id');
    }
}
