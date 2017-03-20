@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <a href="/subjects/create"><button type="button" class="btn btn-lg btn-info">Add a new subject</button></a>
        <hr><br>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Level</th>
                        <th>Teacher</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($subjects as $subject)
                    <tr>
                        <td>{{ $subject->id }}</td>
                        <td>{{ $subject->name }}</td>
                        <td>{{ $subject->level->name }}</td>
                        <td>{{ $subject->teacher->name }}</td>
                        <td><a href="/subjects/edit/{{ $subject->id }}"><button type="button" class="btn btn-priamry">Edit</button></a></td>
                        <td><a href="/subjects/delete/{{ $subject->id }}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection