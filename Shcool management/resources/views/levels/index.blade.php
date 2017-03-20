@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <a href="/levels/create"><button type="button" class="btn btn-lg btn-info">Add a new level</button></a>
        <hr><br>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Has the follwing subjects</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($levels as $level)
                    <tr>
                        <td>{{ $level->id }}</td>
                        <td>{{ $level->name }}</td>
                        <td>
                        @foreach ($level->subjects as $subject) 
                        <li>{{ $subject->name }}</li>
                        @endforeach
                        </td>
                        <td><a href="/levels/edit/{{ $level->id }}"><button type="button" class="btn btn-priamry">Edit</button></a></td>
                        <td><a href="/levels/delete/{{ $level->id }}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection