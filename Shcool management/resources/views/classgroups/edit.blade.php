@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="/classgroups/{{ $classgroup->id }}" method="POST" role="form">
            {{ csrf_field() }}
            	<legend>Edit a classgroup</legend>
            
            	<div class="form-group">
            		<input name="name" type="text" class="form-control" id="" value="{{ $classgroup->name }}">
            	</div>
            
            	            
            	<button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection