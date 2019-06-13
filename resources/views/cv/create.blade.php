@extends('layouts.app')

@section('content') 

	

<div class="container">
	<div class="row">
		<div class="col-md-12">
		
			<form action="{{url('cvs')}}" method="post" enctype="multipart/form-data">
				{{csrf_field()}}
			
				<div class="form-group @if($errors->get('title')) has-error @endif">
					<label for="">Title</label>
					<input type="text" name="title" class="form-control" value="{{old('title')}}" >
					@if($errors->get('title'))
					@foreach($errors->get('title') as $message)
					<li>{{$message}}</li>
					@endforeach
					@endif
				</div>
				
				<div class="form-group has-error">
					<label for="">Presentation</label>
					<textarea name="presentation" class="form-control" >{{old('presentation')}}</textarea>
					
					@if($errors->get('presentation'))
					@foreach($errors->get('presentation') as $message)
					<li>{{$message}}</li>
					@endforeach
					@endif
				</div>
				
				<div class="form-group">
					<label for="">Image</label>
					<input class="form-control" type="file" name="photo" >
				</div>
				
				
				<div class="form-group">
					
					<input type="submit" class="form-control btn btn-primary" value="enregistrer">
				</div>
			
			
			
			</form>
		
		</div>	
	
	</div>



</div>

@endsection