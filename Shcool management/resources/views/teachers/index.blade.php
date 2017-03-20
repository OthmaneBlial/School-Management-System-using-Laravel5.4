@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <a href="/teachers/create"><button type="button" class="btn btn-lg btn-info">Add a new teacher</button></a>
        <hr><br>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Experience</th>
                        <th>Classroom</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->id }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->experience }}</td>
                        <td>{{ $teacher->classroom->name }}</td>
                        <td><a href="/teachers/edit/{{ $teacher->id }}"><button type="button" class="btn btn-priamry">Edit</button></a></td>
                        <td><a href="/teachers/delete/{{ $teacher->id }}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection