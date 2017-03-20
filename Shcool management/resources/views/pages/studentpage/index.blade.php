@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Dear student, these are your Information</h3>
                </div>
                <div class="panel-body">
                    <p>Name: {{ $student->name }}</p>
                    <p>Gender: {{ $student->gender }}</p>
                   <p>Experience: {{ $student->age }}</p>
                   <p>Phone: {{ $student->address }}</p>
                   <p>Joind at: {{ $student->created_at }}</p>
                </div>
            </div>

            <a href="/studentpage/edit/{{ $student->id }}"><button type="button" class="btn btn-info btn-lg">Edit</button></a>

        </div>
    </div>
</div>
@endsection