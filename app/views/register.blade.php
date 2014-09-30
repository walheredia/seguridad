@extends ('layout')

@section ('content')
<form class="form-horizontal" role="form" method="POST" action="{{ URL::asset('register') }}">
	
		<fieldset class="cool-fieldset">
			<div class="form-group">
				<div class="col-sm-6">
	  				<h5><strong>Ingrese sus datos personales</strong></h5>
		  		</div>	
			</div>
			<div class="form-group">
				<div class="col-sm-3">
	  				<p class="help-block margin-bottom-cero"><small>Nombre:</small></p>
	  				<input type="text" class="form-control" placeholder="Nombre..." name="servicio-modalidad-sae" id="servicio-modalidad-sae">
		  		</div>
				<div class="col-sm-3">
	  				<p class="help-block margin-bottom-cero"><small>Apellido:</small></p>
	  				<input type="text" class="form-control" placeholder="Apellido..." name="servicio-modalidad-sae" id="servicio-modalidad-sae">
		  		</div>		  			
		  	</div>
		  	<div class="form-group">
				<div class="col-sm-3">
	  				<p class="help-block margin-bottom-cero"><small>E-mail:</small></p>
	  				<input type="text" class="form-control" placeholder="E-mail..." name="servicio-modalidad-sae" id="servicio-modalidad-sae">
		  		</div>
				<div class="col-sm-3">
	  				<p class="help-block margin-bottom-cero"><small>Contraseña:</small></p>
	  				<input type="text" class="form-control" placeholder="Contraseña..." name="servicio-modalidad-sae" id="servicio-modalidad-sae">
		  		</div>		  			
		  	</div>
		  	<div class="form-group">
				<div class="col-sm-6">
	  				<p class="help-block margin-bottom-cero"><small>Confirmar Contraseña:</small></p>
	  				<input type="text" class="form-control" placeholder="Confirmar Contraseña..." name="servicio-modalidad-sae" id="servicio-modalidad-sae">
		  		</div>		  			
		  	</div>

		  	<div class="form-group">
		  			<div class="col-sm-6">
	  				<input type="submit" value="Registrarme" class="btn btn-success form-control">
		  		</div>
		  	</div>		
		</fieldset>
	
</form>
@stop