@extends('layouts.app')



@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Service</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
					La vue de service
                </div>
            </div>
        </div>
    </div>
</div>



					<div class="row">
					@foreach($cvs as $cv)
					  <div class="col-sm-6">
						<div class="card">
						  <div class="card-body">
							<h5 class="card-title"><strong> {{$cv->user->name}}</strong></h5>
							<img src="{{asset('storage/'.$cv->photo)}}"alt="..." class="img-thumbnail">
								<h5 class="card-title"><strong>{{$cv->title}}</strong></h5>
							<p class="card-text">{{$cv->presentation}}</p>
							<a href="#" class="btn btn-primary">contacter</a>
						  </div>
						</div>
					  </div>
					  @endforeach
					</div>
					
			

@endsection