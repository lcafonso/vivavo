<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $fillable = [
		'grandma_id', 'name', 'slug', 'data_time', 'local', 'excerpt', 'body', 'file1', 'file2', 'file3', 'file4', 'file5', 'status'
	];

	public  function grandma()
	{
		return $this->belongsTo(Grandma::class);
	}

    public function activits(){
    	return $this->belongsToMany(Activit::class);
    }

   
}

