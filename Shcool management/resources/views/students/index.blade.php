@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <a href="/students/create"><button type="button" class="btn btn-lg btn-info">Add a new student</button></a>
        <hr><br>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Classroom</th>
                        <th>Level with its subjects and their results</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->gender }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->classroom->name }}</td>
                        <td>
                        Its Level is : {{ $student->level->name }}
                        Which has the following subjects:
                        @foreach ($student->subjects as $subject)
                        <li>{{ $subject->name }} 
                        </li>
                        @endforeach
                        </td>
                        <td><a href="/students/edit/{{ $student->id }}"><button type="button" class="btn btn-priamry">Edit</button></a></td>
                        <td><a href="/students/delete/{{ $student->id }}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection