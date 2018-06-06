<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
	protected $fillable = [
		'name', 'slug'
	];

    public function locals()
    {
        return $this->hasMany('App\Local');
    }
}
