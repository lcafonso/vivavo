<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function activits(){
    	return $this->belongsToMany(Activit::class);
    }
}
