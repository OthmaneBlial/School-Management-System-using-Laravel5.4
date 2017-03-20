@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="/students" method="POST" role="form">
            {{ csrf_field() }}
            	<legend>Add a new Student</legend>
            
            	<div class="form-group">
            		<label for="">Name</label>
            		<input name="name" type="text" class="form-control" id="" placeholder="Enter Name">
            	</div>
                  <div class="form-group">
                    <label for="">Username</label>
                    <input name="username" type="text" class="form-control" id="" placeholder="Enter Username">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input name="email" type="text" class="form-control" id="" placeholder="Enter Email">
                </div>
            	<div class="form-group">
            	<label for="">Gender</label>
            	<select name="gender" id="input" class="form-control" required="required">
            		<option>Male</option>
            		<option>Female</option>
            	</select>
            	</div>
            	<div class="form-group">
            		<label for="">Age</label>
            		<input name="age" type="text" class="form-control" id="" placeholder="Enter Age">
            	</div>
            	<div class="form-group">
            		<label for="">Address</label>
            		<input name="address" type="text" class="form-control" id="" placeholder="Enter Address">
            	</div>

				<div class="form-group">
				<label for="">Classroom</label>
            	<select name="classroom_id" id="inputClassroom_id" class="form-control" required="required">
            		@foreach ($classrooms as $classroom)
            		<option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
            		@endforeach
            	</select>
            	</div>

            	<div class="form-group">
				<label for="">Level</label>
            	<select name="level_id" id="inputLevel_id" class="form-control" required="required">
            		@foreach ($levels as $level)
            		<option value="{{ $level->id }}">{{ $level->name }}</option>
            		@endforeach
            	</select>
            	</div>

                  <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" id="inputPassword" class="form-control" required="required" title="">
                </div>
                <div class="form-group">
                    <label for="">Password Confirmation</label>
                    <input type="password" name="password_confirmation" id="inputPassword" class="form-control" required="required" title="">
                </div>
            	
            
            	<button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection