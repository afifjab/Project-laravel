<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  
  
</head>

<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

<body>
 
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"> {{ config('app.name', 'Laravel') }}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
	
      <li class="nav-item active">
        <a class="nav-link" href="{{url('acceuil')}}">Acceuil <span class="sr-only">(current)</span></a>
      </li>
	  
      <li class="nav-item active">
        <a class="nav-link" href="{{url('contacte')}}">Contacte</a><span class="sr-only">(current)</span></a>
      </li>
	  
	  <li class="nav-item active">
        <a class="nav-link" href="{{url('service')}}">Service</a><span class="sr-only">(current)</span></a>
      </li>

	  <li>
	   <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    </form>
	  </li>	

		 
		 
		
    </ul>
  </div>

</nav>
   
 @yield('content1')
 
 
 
 
 <script src="{{asset('assets/js/jquary.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
 
</body>
</html>