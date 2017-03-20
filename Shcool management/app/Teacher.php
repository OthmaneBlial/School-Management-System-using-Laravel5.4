<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    protected $fillable = ['name', 'gender','classroom_id', 'level_id', 'experience', 'phone'];

    public static $validationRules = array(
        'name' => 'required|string',
        'gender' => 'required',
        'classroom_id' => 'required|integer',
        'level_id' => 'required|integer',
        'experience' => 'required|string',
        'phone' => 'required|digits_between:7,10',
    );

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class, 'classroom_id');
    }

    public function level()
    {
        return $this->belongsTo(L::class, 'level_id');
    }

    public function subject()
    {
        return $this->hasOne(Subject::class);
    }
}
