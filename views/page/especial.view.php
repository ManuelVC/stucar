<?php require_once APP_PATH.'views/partials/head.view.php'; ?>
<?php require_once APP_PATH.'views/partials/nav.view.php'; ?>

		<!----//End-header---->
		<div class="about">
		 <!----//start-banner---->
		  <div class="container">
			<section class="title-section">
				<h1 class="title-header">
				Viaje Especial </h1>
				<ul class="breadcrumb breadcrumb__t"><li><a href="<?= PUBLIC_PATH ?>">Principal</a></li><li class="active">Especiales</li></ul>  
			</section> 
	       </div>
		</div>


	<div class="container">
		<div class="row">
			<h4 class="tituloFormulario">Proporciona la siguiente informacion, para reservar viaje:</h5>
		</div>
		<div class="row row-centered">
			<form action="#">
				<div class="form-group  col-sm-6 col-md-offset-3" >
					<label for="nombre">Nombre:</label>
					<input id="nombre" type="text" placeholder="Nombre" class="form-control" required>
				</div>

				<div class="form-group col-sm-6 col-md-offset-3">
					<label for="ApellidoP">Apellido Paterno:</label>
					<input id="ApellidoP" type="text" placeholder="Apellido Paterno"  class="form-control" required>
				</div>
				
				<div class="form-group col-sm-6 col-md-offset-3">
					<label for="ApellidoM">Apellido Materno:</label>
					<input id="ApellidoM" type="text" placeholder="Apellido Paterno"  class="form-control" required>
				</div>

				<div class="form-group col-sm-6 col-md-offset-3">
					<label for="Telefono">Telefono:</label>
					<input id="Telefono" type="text" placeholder="Telefono"  class="form-control" required>
				</div>

				<div class="form-group col-sm-6 col-md-offset-3">
				    <label for="correo">Correo:</label>
				    <div class="input-group">
				      <div class="input-group-addon">@</div>
				      <input id="correo" type="text" placeholder="Correo" class="form-control" >
				    </div>
				</div>

				<div class="form-group col-sm-6 col-md-offset-3">
					<label for="fechaSalida">Fecha de Salida:</label>
					<input id="fechaSalida" type="date" placeholder="fechaSalida"  class="form-control" required>
				</div>

				<div class="form-group col-sm-6 col-md-offset-3">
					<label for="numeroPersonas">Numero de Personas:</label>
					<input id="numeroPersonas" value="1" type="number" placeholder="personas"  class="form-control" required>
				</div>

				<div class="form-group col-sm-6 col-md-offset-3">
					<label for="diasViaje">Dias de Viaje:</label>
					<input id="diasViaje" value="1" type="number" placeholder="Dias de viaje"  class="form-control" required>
				</div>
				<div class="form-group col-sm-6 col-md-offset-3">
					<label for="precio">Costo del viaje:</label>
					<p id="precio"> $ 6,490.00 mn</p>

				</div>
				
				<div class="form-group col-sm-6 col-md-offset-3">
					<button type="submit" class="submit" id="btnComprar"><i class="fa fa-paypal fa-1x"></i>Comprar</button>
				</div>
			</form>
		</div>
	</div>
		

<?php require_once APP_PATH.'views/partials/foot.view.php'; ?>