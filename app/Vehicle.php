<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    public function bensin(){
    	return $this->hasMany('Bensin');
    }
}

