<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poi extends Model
{
    protected $fillable = [
		'local_id','name', 'slug', 'excerpt', 'latitude', 'longitude', 'icon', 'image', 'body'
	];

	public  function local()
	{
		return $this->belongsTo(local::class);
	}

}

           