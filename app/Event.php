<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $fillable = [
		'grandma_id', 'name', 'slug', 'data_time', 'local', 'exerpt', 'body', 'file'
	];

    public function activits(){
    	return $this->belongsToMany(Activit::class);
    }
}
