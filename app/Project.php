<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	protected $table = 'projects';

    public function projects() {
    	return $this->belongsTo('App\cv');
    }
}
