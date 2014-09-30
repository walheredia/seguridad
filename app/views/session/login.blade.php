@extends('layout')

@section('content')

	<div class="container">
		
		<div class="row text-center">

			<h1>Iniciar Sesión</h1>

			<div class="col-md-4 col-md-offset-4 text-left">
				
				@if (isset($error))
					<p class="text-danger text-center">
						{{ $error }}
					</p>
				@endif
				
				<form action="{{ URL::asset('login') }}" method="POST" class="form-vertical" role="form">
					
					<div class="form-group">
						
						<div class="col-sm-12">
							<p class="help-block margin-bottom-cero"><small>Nombre de Usuario:</small></p>
							<input type="text" name="username" placeholder="Nombre de Usuario" class="form-control">
						</div>

					</div>

					<div class="form-group">
						
						<div class="col-sm-12">
							<p class="help-block margin-bottom-cero"><small>Contraseña:</small></p>
							<input type="password" name="password" placeholder="Contraseña" class="form-control">
						</div>

					</div>

					<div class="form-group">
						
						<div class="col-sm-12">
							<input type="submit" value="Iniciar Sesión" class="btn btn-success form-control">
						</div>

					</div>

				</form>

			</div>

		</div>

	</div>

@stop