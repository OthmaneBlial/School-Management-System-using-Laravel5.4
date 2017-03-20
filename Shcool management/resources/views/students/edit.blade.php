@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="/students/{{ $student->id }}" method="POST" role="form">
            {{ csrf_field() }}
            	<legend>Edit a Student</legend>
            
            	<div class="form-group">
            		<label for="">Name</label>
            		<input name="name" type="text" class="form-control" id="" placeholder="Enter Name" value="{{ $student->name }}">
            	</div>
            	<div class="form-group">
            	<label for="">SEX</label>
            	<select name="gender" id="input" class="form-control" required="required">
            	@if ($student->gender == 'Male')
            		<option>Male</option>
            	@else
            		<option>Female</option>
            	@endelse
            	@endif
            	</select>
            	</div>
            	<div class="form-group">
            		<label for="">Age</label>
            		<input name="age" type="text" class="form-control" id="" placeholder="Enter Age" value="{{ $student->age }}">
            	</div>
            	<div class="form-group">
            		<label for="">Address</label>
            		<input name="address" type="text" class="form-control" id="" placeholder="Enter Address" value="{{ $student->address }}" >
            	</div>

				<div class="form-group">
				<label for="">Classroom</label>
            	<select name="classroom_id" id="inputClassroom_id" class="form-control" required="required">
            		@foreach ($classrooms as $classroom)
                    @if ($student->classroom_id == $classroom->id)
                    <option value="{{ $student->classroom_id }}" selected>{{ $student->classroom->name }}</option>
                    @else 
            		<option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
                    @endelse
                    @endif
            		@endforeach
            	</select>
            	</div>

            	<div class="form-group">
				<label for="">Level</label>
            	<select name="level_id" id="inputLevel_id" class="form-control" required="required">
            		@foreach ($levels as $level)
                    @if ($student->level_id == $level->id)
                    <option value="{{ $student->level_id }}" selected>{{ $student->level->name }}</option>
                    @else 
            		<option value="{{ $level->id }}">{{ $level->name }}</option>
                    @endelse
                    @endif
            		@endforeach
            	</select>
            	</div>
            	
            
            	<button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection