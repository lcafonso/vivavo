<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grandma extends Model
{
	protected $fillable = [
		'local_id', 'name', 'slug', 'excerpt', 'file'
	];

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function local()
    {
        return $this->belongsTo(Local::class);
    }



}
