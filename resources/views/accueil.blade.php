@extends('layouts.app')



@section('content')


					<div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

<h1>la vue acceuil</h1>


		 	

@endsection