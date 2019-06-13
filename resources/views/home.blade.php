@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			
			
			<h1>La liste des cv</h1>
				
				<div class="pull-right">
					<a href="{{url('cvs/create')}}" class ="btn btn-success">Nouveau CV</a>
				</div>
				
				
				
				
				
				<div class="row">
				@foreach($cvs as $cv)
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
								<strong> {{$cv->user->name}}</strong>
								<img src="{{asset('storage/'.$cv->photo)}}"alt="..." class="img-thumbnail">
								<div class="caption">
									<h3>{{$cv->title}}</h3>
									<p class="card-text">{{$cv->presentation}}</p>
									<p>{{$cv->created_at}}</p>
									<p>
										
										
										<form action="{{url('cvs/'.$cv->id)}}" method="post">
											{{csrf_field()}}
											{{method_field('DELETE')}}
											
										<a href="#" class="btn btn-primary">Detailler</a>
										<a href="{{url('cvs/'.$cv->id.'/edit')}}" class="btn btn-default">Editer</a>
										<button type="submit" class="btn btn-danger">Supprimer</button>
										</form>
										
									</p>
									
								</div>						
						</div>	
					</div>
					@endforeach
					
					<!--            -->
					
					
					<!--           -->
				</div>
		</div>	
	</div>
</div>


@endsection
