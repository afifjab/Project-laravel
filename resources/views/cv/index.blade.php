@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			
			
			<h1>La liste des cv</h1>
				
				<div class="pull-right">
					<a href="{{url('cvs/create')}}" class ="btn btn-success">Nouveau CV</a>
				</div><br>
				
				
				
				
				
				<div class="row">
				@foreach($cvs as $cv)
					<div class="col-sm-6 col-md-4">
					
					<!--<strong> {{$cv->user->name}}</strong>-->
						<div class="card" style="width: 22rem; height: 35rem;">
								<h5 class="card-header">{{$cv->user->name}}</h5>
								<img src="{{asset('storage/'.$cv->photo)}}"alt="..." class="card-img-top">
									
								<div class="card-body">
									
										<h3>{{$cv->title}}</h3>
										<p>{{$cv->presentation}}</p>
									
									<p>{{$cv->created_at}}</p>
									<p>
										
										
										<form action="{{url('cvs/'.$cv->id)}}" method="post">
											{{csrf_field()}}
											{{method_field('DELETE')}}
											
										<a href="{{url('cvs/show')}}" class="btn btn-info">Show</a>
										<a href="{{url('cvs/'.$cv->id.'/edit')}}" class="btn btn-default">Editer</a>
										<!-- redre button supprimer invisible par la methode can-->
										@can('delete',$cv)
										<button type="submit" class="btn btn-danger">Supprimer</button>
										@endcan
										</form>
										
									</p>
									
								</div>	
										
										 <div class="card-footer text-muted">
											2 days ago
										</div>
										
						</div>	
						<hr>
						
					</div>
					@endforeach
				</div>
		</div>	
	</div>
</div>	
@endsection
