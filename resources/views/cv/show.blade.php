@extends('layouts.app')
@section('content')

	<div class="container" id="app">
		<div class="row">
			<div class="col-md-12">
			<h1>@{{message}}</h1>
			
				<!--<div class="panel panel-primary">
					<div class="panel-heading ">
						<h3 class="panel-title">experience</h3>
					</div>
					
					<div class="panel-body">
					<p>voici mon experience svp si tu est interesse appeler moi</p>
					</div>
					
				</div>-->
				
				<div class="card" >
				  <div class="card-header">
						<div class="row">
							<div class="col-md-10"> <h5 class="card-title">Special title treatment</h5></div>
							<div class="col-md-2 text-right">
								<button type="button" class="btn btn-success">Success</button>
							</div>
						</div>
				  </div>
				  <div class="card-body">
					<h5 class="card-title">experience</h5>
						<ul class="list-group">
							<li class="list-group-item">
								<div class="pull-right">
									<button type="button" class="btn btn-warning btn-sm">Warning</button>
								</div>
								
								<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							</li>
							<hr>
							
							<li class="list-group-item">
								<div class="pull-right">
									<button type="button" class="btn btn-warning btn-sm">Warning</button>
								</div>
								
								<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							</li>
							<hr>
							<li class="list-group-item">
								<div class="pull-right">
									<button type="button" class="btn btn-warning btn-sm">Warning</button>
								</div>
								
								<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							</li>
						
						</ul>

				  </div>
				</div>
				
				<hr>
				
			</div>
		</div>
	</div>		


@endsection

@section('javascripts')

<script src="{{asset('js/vue.js')}}"></script>
<script>

var app = new Vue({
  el: '#app',
  data: {
    message: '{{ Auth::user()->name }}'
  }
})
</script>


@endsection