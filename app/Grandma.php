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
        return $this->hasMany('App\Event');
    }

    public function local()
    {
        return $this-belongsTo('App\Local');
    }
    
}
