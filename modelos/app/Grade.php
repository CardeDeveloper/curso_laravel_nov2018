<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
	protected $fillable= ['id', 'subject_id', 'student_id', 'grade'];
    public function student()
	{
    	return $this->belongsTo('App\student', 'student_id');
	
	}

	public function subject(){
		return $this->belongsTo('App\Subject', 'subject_id');
	}
}
