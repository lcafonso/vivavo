<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = [
		'event_id','name', 'surname', 'email', 'comment', 'num_adults', 'num_children',
	];

    public function events()
    {
        return $this->belongsTo('App\Event');
    }
   
}
