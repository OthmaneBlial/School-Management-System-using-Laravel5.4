<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Teacher;

class TeacherPageController extends Controller
{
    //

    public function __construct()
    {

           $this->middleware('role:Teacher');              
        
    }


    public function index() {


        $teacher = Teacher::find(Auth::user()->userable_id);

        return view('pages.teacherpage.index', compact('teacher'));
    }


    public function edit(Teacher $teacher)
    {


        return view('pages.teacherpage.edit', compact('teacher'));
    }


     public function update(Teacher $teacher)
    {

        //dd(request()->all());
    	
        $input = request(['name','gender', 'experience', 'phone']);

        $teacher->fill($input)->save();

        return redirect('/teacherpage');
        
    }
}
