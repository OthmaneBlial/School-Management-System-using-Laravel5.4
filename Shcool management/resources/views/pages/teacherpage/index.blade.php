@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Dear Teacher, these are your Information</h3>
                </div>
                <div class="panel-body">
                    <p>Name: {{ $teacher->name }}</p>
                    <p>Gender: {{ $teacher->gender }}</p>
                   <p>Experience: {{ $teacher->experience }}</p>
                   <p>Phone: {{ $teacher->phone }}</p>
                   <p>Joind at: {{ $teacher->created_at }}</p>
                </div>
            </div>

            <a href="/teacherpage/edit/{{ $teacher->id }}"><button type="button" class="btn btn-info btn-lg">Edit</button></a>

        </div>
    </div>
</div>
@endsection