<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Proyecto Final</title>
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap-theme.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/vendor/jquery-ui-1.10.3.custom.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/escuela.css') }}">
	<style>
		table tr {
			text-align: left;
			margin: 10px;
		}
	</style>	

</head>
<body>
	<nav class="navbar navbar-inverse" role="navigation">
		<div class="navbar-header">
	    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	      		<span class="sr-only">Toggle navigation</span>
	      		<span class="icon-bar"></span>
	      		<span class="icon-bar"></span>
	      		<span class="icon-bar"></span>
	    	</button>
	    	<a class="navbar-brand" href="/laravel/public/">Home</a>
	  	</div>
	  	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	  		 <ul class="nav navbar-nav">
	  		 	<li><a href="{{ URL::asset('') }}">Inicio</a></li>
	  		 	<li><a href="{{ URL::asset('login') }}">Ingresar</a></li>
	  		 </ul>
	  		 <ul class="nav navbar-nav navbar-right">
	  		 	<li class="dropdown">
			        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bienvenido <strong>{{ Session::get('surname') }}</strong> <b class="caret"></b></a>
			        <ul class="dropdown-menu">
			          <li><a href="{{ URL::asset('logout') }}">Cerrar Sesión</a></li>
			        </ul>
		      	</li>
		    </ul>
	  	</div>
	</nav>




	<!-- Nav tabs 
	<ul class="nav nav-tabs" role="tab
	  <li class="active"><a href="#home" role="tab" data-toggle="tab">Home</a></li>
	  <li><a href="#profile" role="tab" data-toggle="tab">Profile</a></li>
	  <li><a href="#messages" role="tab" data-toggle="tab">Messages</a></li>
	  <li><a href="#settings" role="tab" data-toggle="tab">Settings</a></li>
	</ul>
	-->
	@yield('content')
	
	<script src="{{ URL::asset('js/jquery-2.0.3.min.js') }}"></script>
	<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ URL::asset('js/jquery-ui-1.10.3.custom.min.js') }}"></script>
	<script src="{{ URL::asset('js/main.js') }}"></script>
</body>
</html>