<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cv extends Model
{
	protected $table = 'cvs';

    public function users() {
    	return $this->belongsTo('App\User');
    }

    public function contacts() {
    	return $this->hasOne('App\Contact');
    }

    public function skills() {
    	return $this->hasOne('App\Skill');
    }

    public function summarys() {
    	return $this->hasOne('App\Summary');
    }

    public function experiences() {
    	return $this->hasMany('App\Experience');
    }

    public function educations() {
    	return $this->hasMany('App\Education');
    }

    public function certifications() {
    	return $this->hasMany('App\Certification');
    }

    public function projects() {
    	return $this->hasMany('App\Project');
    }
}
