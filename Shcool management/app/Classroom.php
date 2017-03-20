<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    //
    protected $guarded = [];

    public function classgroup()
    {
        return $this->belongsTo(Classgroup::class, 'classgroup_id');
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }



}
