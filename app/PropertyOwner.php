<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyOwner extends Model
{
    public $timestamps = false;

    public function addresses() {
        return $this->hasMany('App\Address', 'property_owner_id');
    }
}
