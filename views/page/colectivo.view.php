<?php require_once APP_PATH.'views/partials/head.view.php'; ?>
<?php require_once APP_PATH.'views/partials/nav.view.php'; ?>


		<div class="about">
		 <!----//start-banner---->
		  <div class="container">
			<section class="title-section">
				<h1 class="title-header">
				Viaje Colectivos </h1>
				<ul class="breadcrumb breadcrumb__t"><li><a href="<?= PUBLIC_PATH ?>">Principal</a></li><li class="active">Colectivos</li></ul>  
			</section> 
	       </div>
		</div>
	
		<div class="container" >

			<div class="row" style="margin-top: 2em;">
				<h1> Tarifas de rutas establecidas</h1>
			</div>
			<div class="row" style="margin: 1em 0;">
				<label for="optradio" style="margin-right: 2em">Oficina: </label>
           		<label class="radio-inline"><input type="radio" name="oficina" checked>Puerto Vallarta</label>
				<label class="radio-inline"><input type="radio" name="oficina">Tomatlan</label>

			</div>
			<div class="row" style="margin: 2em 0;">
				<table class="table table-hover table-bordered" style="text-align:center;">
 				<thead >
 					<tr>
 						<th class="text-center">ORIGEN</th>
						<th class="text-center">DESTINO</th>
						<th class="text-center">TARIFA M.N</th>
 					</tr>
 				</thead>
 				<tbody>
 					<tr>
 						<td>Puerto vallarta</td>
 						<td>Tomatlan</td>
 						<td> $ 84.50</td>
 					</tr>
 					<tr>
 						<td>Puerto vallarta</td>
 						<td>Tomatlan</td>
 						<td> $ 84.50</td>
 					</tr>
 					<tr>
 						<td>Puerto vallarta</td>
 						<td>Tomatlan</td>
 						<td> $ 84.50</td>
 					</tr>
 					<tr>
 						<td>Puerto vallarta</td>
 						<td>Tomatlan</td>
 						<td> $ 84.50</td>
 					</tr>
 					<tr>
 						<td>Puerto vallarta</td>
 						<td>Tomatlan</td>
 						<td> $ 84.50</td>
 					</tr>

 				</tbody>
			</table>
			</div>
			
		</div>


<?php require_once APP_PATH.'views/partials/foot.view.php'; ?>