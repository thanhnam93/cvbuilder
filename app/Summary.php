<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Summary extends Model
{
    protected $table = 'summarys';

    public function summarys() {
    	return $this->belongsTo('App\cv');
    }
}
