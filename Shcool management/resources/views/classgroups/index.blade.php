@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <a href="/classgroups/create"><button type="button" class="btn btn-lg btn-info">Add a new classgroup</button></a>
        <hr><br>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Classgroup Name</th>
                        <th>Has the following Classrooms</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($classgroups as $classgroup)
                    <tr>
                        <td>{{ $classgroup->id }}</td>
                        <td>{{ $classgroup->name }}</td>
                        <td>
                        @foreach ($classgroup->classrooms  as $classroom)
                        <li>{{ $classroom->name }}</li>
                        @endforeach
                        </td>
                        <td><a href="/classgroups/edit/{{ $classgroup->id }}"><button type="button" class="btn btn-priamry">Edit</button></a></td>
                        <td><a href="/classgroups/delete/{{ $classgroup->id }}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection