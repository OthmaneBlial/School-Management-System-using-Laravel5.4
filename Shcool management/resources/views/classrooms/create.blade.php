@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="/classrooms" method="POST" role="form">
            {{ csrf_field() }}
            	<legend>Create a new classroom</legend>
            
            	<div class="form-group">
            		<input name="name" type="text" class="form-control" id="" placeholder="Enter classroom name">
            	</div>
            	<div class="form-group">
            	<label for="">Classgroup</label>     	
            	<select name="classgroup_id" id="inputClassgroup_id" class="form-control" required="required">
            	@foreach ($classgroups as $classgroup)
            		<option value="{{ $classgroup->id }}">{{ $classgroup->name }}</option>
            	@endforeach
            	</select>
            	</div>


            	            
            	<button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection