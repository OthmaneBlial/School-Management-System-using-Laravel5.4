<?php

namespace App\Http\Controllers;

use App\Classgroup;
use Illuminate\Http\Request;

class ClassgroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $classgroups = Classgroup::all();

        //return $classgroups;

        return view('classgroups.index', compact('classgroups'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


        return view('classgroups.create');
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

        Classgroup::create(request(['name']));

        return redirect('/classgroups');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Classgroup  $classgroup
     * @return \Illuminate\Http\Response
     */
    public function show(Classgroup $classgroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Classgroup  $classgroup
     * @return \Illuminate\Http\Response
     */
    public function edit(Classgroup $classgroup)
    {
        //
        return view('classgroups.edit', compact('classgroup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Classgroup  $classgroup
     * @return \Illuminate\Http\Response
     */
    public function update(Classgroup $classgroup)
    {
        //

        $input = request(['name']);

        $classgroup->fill($input)->save();

        return redirect('/classgroups');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Classgroup  $classgroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classgroup $classgroup)
    {
        //

        $classgroup->delete();

        return redirect('/classgroups');


    }
}
