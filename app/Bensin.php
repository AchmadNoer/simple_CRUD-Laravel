<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bensin extends Model
{
    protected $fillable = ['nama', 'harga', 'ron', 'id_vehicle'];

    public function vehicle(){
    	return $this->belongsTo('Vehicle');
    }
}

