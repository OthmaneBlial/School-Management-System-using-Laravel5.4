@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="/classrooms/{{ $classroom->id }}" method="POST" role="form">
            {{ csrf_field() }}
            	<legend>Edit a new classroom</legend>
            
            	<div class="form-group">
            		<input name="name" type="text" class="form-control" id="" value="{{ $classroom->name }}">
            	</div>
            	<div class="form-group">

				<label for="">Classgroup</label>
            	<select name="classroom_id" id="inputClassroom_id" class="form-control" required="required">
            		@foreach ($classgroups as $classgroup)
                    @if ($classroom->classgroup_id == $classgroup->id)
                    <option value="{{ $classroom->classgroup_id }}" selected>{{ $classroom->classgroup->name }}</option>
                    @else 
            		<option value="{{ $classgroup->id }}">{{ $classgroup->name }}</option>
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