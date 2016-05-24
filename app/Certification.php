<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
	protected $table = 'certifications';

    public function certifications() {
    	return $this->belongsTo('App\cv');
    }
}
