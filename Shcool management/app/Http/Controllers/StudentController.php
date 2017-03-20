<?php

namespace App\Http\Controllers;

use App\Student;
use App\Classroom;
use App\Level;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function __construct()
    {

           $this->middleware('role:Admin')->except('create', 'store');              
        
    }

    
    public function index()
    {
        //

        $students = Student::all();

        //$student = Student::find(1);

        //return $student->subjects;

        return view('students.index', compact('students'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $classrooms = Classroom::all();
        $levels = Level::all();

        return view('students.create', compact('classrooms', 'levels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //

        //dd(request()->all());

        //$validator = Validator::make(request()->all(), Student::$validationRules);

        //if ($validator->fails())
            //return redirect('/students/create')->withInput($request->all())->withErrors($validator);

        $student = Student::create(request(['name','gender', 'age', 'address', 'classroom_id', 'level_id']));

        User::create([
            'name' => $student->name,
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'userable_id' => $student->id,
            'userable_type' => 'Student'
        ]);

        if (Auth::check() && Auth::user()->hasRole('Admin')) {
            return redirect('/students');
        }
        
        return redirect('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
        $classrooms = Classroom::all();
        $levels = Level::all();

        return view('students.edit', compact('classrooms', 'levels', 'student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Student $student)
    {
        //

        $input = request(['name','gender', 'age', 'address', 'classroom_id', 'level_id']);

        $student->fill($input)->save();

        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //

        $student->delete();

        return redirect('/students');


    }
}
