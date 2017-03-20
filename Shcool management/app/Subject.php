<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //
	protected $guarded = [];

    
    public function level()
    {
        return $this->belongsTo(Level::class, 'level_id');
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }


    public function students()
    {
        return $this->belongsToMany(Student::class);
    }






}
