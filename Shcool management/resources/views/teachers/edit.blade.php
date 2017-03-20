@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="/teachers/{{ $teacher->id }}" method="POST" role="form">
            {{ csrf_field() }}
            	<legend>Edit a Teacher</legend>
            
            	<div class="form-group">
            		<label for="">Name</label>
            		<input name="name" type="text" class="form-control" id="" placeholder="Enter Name" value="{{ $teacher->name}}">
            	</div>
            	<div class="form-group">
            		<label for="">Experience</label>
            		<input name="experience" type="text" class="form-control" id="" placeholder="Enter Experience" value="{{ $teacher->experience}}">
            	</div>
				<div class="form-group">
				<label for="">Classroom</label>
            	<select name="classroom_id" id="inputClassroom_id" class="form-control" required="required">
            		@foreach ($classrooms as $classroom)
                    @if ($teacher->classroom_id == $classroom->id)
                    <option value="{{ $teacher->classroom_id }}" selected>{{ $teacher->classroom->name }}</option>
                    @else 
            		<option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
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