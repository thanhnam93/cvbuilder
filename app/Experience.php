<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
	protected $table = 'experiences';

    public function experiences() {
    	return $this->belongsTo('App\cv');
    }
}
