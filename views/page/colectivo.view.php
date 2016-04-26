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
				<form id="formulario">
					<label for="" style="margin-right: 2em;">Oficina: </label>
					<label for="" style="margin-right: 1em;"><input type="radio" name="oficina" id="of1" class="oficina" value="21" checked style="margin-right: .5em;">Puerto Vallarta</label>
					<label for=""><input type="radio" name="oficina" id="of2" class="oficina" value="54" style="margin-right: .5em;">Tomatlan</label>
				</form>
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
 				<tbody id="listado">
 				<?php foreach($data['tableCol'] as $key => $value): ?>
 					<tr>
 						<td><?= $value['origen']; ?></td>
 						<td><?= $value['destino']; ?></td>
 						<td> $ <?= $value['tarifa']; ?>.00</td>
 					</tr>
				<?php endforeach; ?>
 				</tbody>
			</table>
			</div>
			
		</div>

		<script>
			$('.oficina').on('click',function(){
				$valor = $(this).val();
				if($.isNumeric($valor)){
					$('#listado').empty();
					var form = $('#formulario').serialize();
					$.ajax({
						url: 'ruta',
						type: 'POST',
						data: form,
						success: function(data){
							$('#listado').html(data);
						}
					});
				}else{
					alert('Oficina invalida');
				}
			});
		</script>


<?php require_once APP_PATH.'views/partials/foot.view.php'; ?>