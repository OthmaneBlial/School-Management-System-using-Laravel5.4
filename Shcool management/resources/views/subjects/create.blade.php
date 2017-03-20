@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="/subjects" method="POST" role="form">
            {{ csrf_field() }}
            	<legend>Create a new subject</legend>
            
            	<div class="form-group">
            		<input name="name" type="text" class="form-control" id="" placeholder="Enter subject name">
            	</div>
            	<div class="form-group">
            	<label for="">Level</label>     	
            	<select name="level_id" id="inputlevel_id" class="form-control" required="required">
            	@foreach ($levels as $level)
            		<option value="{{ $level->id }}">{{ $level->name }}</option>
            	@endforeach
            	</select>
            	</div>
                <div class="form-group">
                <label for="">Teacher</label>         
                <select name="teacher_id" id="inputteacher_id" class="form-control" required="required">
                @foreach ($teachers as $teacher)
                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                @endforeach
                </select>
                </div>


            	            
            	<button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection