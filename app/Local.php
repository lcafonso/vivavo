<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
	protected $fillable = [
		'district_id','name', 'slug', 'body','file'
	];

	public  function poi()
	{
		return $this->hasMany(Poi::class);
	}

    public function district()
    {
        return $this->belongsTo('App\District');
    }
}
