<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activit extends Model
{
    protected $fillable = [
		'name', 'slug', 'body'
	];

    public function events() {
    	return $this->hasMany(Event::class);
    }
}
