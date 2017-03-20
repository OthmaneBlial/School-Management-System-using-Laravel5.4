@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <form action="/teacherpage/{{ $teacher->id }}" method="POST" role="form">
            {{ csrf_field() }}

        	<legend>Edit Teacher Information</legend>
        
        	<div class="form-group">
        		<label for="">name</label>
        		<input name="name" type="text" class="form-control" placeholder="Enter name" required value="{{ $teacher->name}}">
        	</div>
        	<div class="form-group">
        		<select name="gender" id="inputGender" class="form-control">
        			@if ($teacher->gender == 'Male')
        			<option selected>Male</option>
        			<option>Female</option>
        			@else
        			<option>Male</option>
                    <option selected>Female</option>
        			@endelse
        			@endif
        		</select>
        	</div>
        	<div class="form-group">
        		<label for="">experience</label>
        		<input name="experience" type="text" class="form-control" placeholder="enter experience" required value="{{ $teacher->experience}}">
        	</div>
        	<div class="form-group">
        		<label for="">phone</label>
        		<input name="phone" type="text" class="form-control" placeholder="enter phone" required value="{{ $teacher->phone}}">
        	</div>      
        	
        
        	<button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>
    </div>
</div>
@endsection