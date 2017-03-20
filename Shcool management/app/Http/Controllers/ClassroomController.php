<?php

namespace App\Http\Controllers;

use App\Classroom;
use App\Classgroup;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $classrooms = Classroom::all();

        //return $classrooms;

        return view('classrooms.index', compact('classrooms'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


        $classgroups = Classgroup::all();

        return view('classrooms.create', compact('classgroups'));
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

        Classroom::create(request(['name', 'classgroup_id']));

        return redirect('/classrooms');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show(Classroom $classroom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Classroom $classroom)
    {
        //

        $classgroups = Classgroup::all();


        return view('classrooms.edit', compact('classgroups', 'classroom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function update(Classroom $classroom)
    {
        //

        $input = request(['name', 'classgroup_id']);

        $classroom->fill($input)->save();

        return redirect('/classrooms');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classroom $classroom)
    {
        //

        $classroom->delete();

        return redirect('/classrooms');


    }
}
