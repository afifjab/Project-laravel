@extends('layouts.app')

@section('content') 


	@if(count($errors))
		<div class="alert alert-danger" role="alert">
	
			<ul>
				@foreach($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>

		</div>
	@endif

<div class="container">
	<div class="row">
		<div class="col-md-12">
		
			<form action="{{url('cvs/'.$cv->id)}}" method="post"  enctype="multipart/form-data">
			<input type="hidden" name="_method" value="PUT">
				{{csrf_field()}}
			
				<div class="form-group">
					<label for="">Title</label>
					<input type="text" name="title" class="form-control" value="{{$cv->title}}">
				</div>
				
				<div class="form-group">
					<label for="">Presentation</label>
					<textarea name="presentation" class="form-control" >{{$cv->presentation}}</textarea>
				</div>
				
				<div class="form-group">
					<label for="">Image</label>
					<input class="form-control" type="file" name="photo" >
				</div>
				
				
				
				<div class="form-group">
					
					<input type="submit" class="form-control btn btn-danger" value="Modifier">
				</div>
			
			
			
			</form>
		
		</div>	
	
	</div>



</div>

@endsection