@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           
         
        
        @if (Auth::check() && Auth::user()->hasRole('Student'))
        <div class="jumbotron">
            <div class="container">
                <h1>Hello Dear Student</h1>
                <p>Click button below to access your space</p>
                <p>
                    <a href="/studentpage" class="btn btn-info btn-lg">Access my space</a>
                </p>
            </div>
        </div>
        @endif

        @if (Auth::check() && Auth::user()->hasRole('Teacher'))
        <div class="jumbotron">
            <div class="container">
                <h1>Hello Dear Teacher</h1>
                <p>Click button below to access your space</p>
                <p>
                    <a href="/teacherpage" class="btn btn-info btn-lg">Access my space</a>
                </p>
            </div>
        </div>
        @endif

        @if (Auth::check() && Auth::user()->hasRole('Admin'))
        <div class="jumbotron">
            <div class="container center">
                <h2>Hello Dear Admin</h2>
                <p class="lead">What do you want to do</p>
                <p>
                    <p><a href="/students" class="btn btn-success btn-lg">Show students</a></p>
                    <p><a href="/teachers" class="btn btn-success btn-lg">Show teachers</a></p>
                    <p><a href="/classgroups" class="btn btn-success btn-lg">Show classgroups</a></p>
                    <p><a href="/levels" class="btn btn-success btn-lg">Show levels</a></p>
                </p>
            </div>
        </div>
        @endif

        @if (!Auth::check())
            <div class="row">
                <div class="col-md-6">
                    <div class="jumbotron">
                        <div class="container">
                            <h2>Are you a teacher?</h2>
                        <p>
                            <a href="/teachers/create" class="btn btn-primary btn-lg">Sign Up Here</a>
                        </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="jumbotron">
                        <div class="container">
                            <h2>Are you a Student?</h2>
                        <p>
                            <a href="/students/create" class="btn btn-primary btn-lg">Sign Up Here</a>
                        </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="jumbotron">
                        <div class="container">
                            <h3>Already registered</h3>
                        <p class="lead">
                            <a href="/login" class="btn btn-success btn-lg">Log In</a>
                        </p>
                        </div>
                    </div>
                </div>
                
            </div>    
         @endif


        </div>
    </div>
</div>
@endsection
