<?php require_once APP_PATH.'views/admin/partials/head.view.php' ?>
	
    <div id="wrapper">
    
    <?php require_once APP_PATH.'views/admin/partials/nav.view.php' ?>

        <div id="page-wrapper">

			<div class="container" style="margin-bottom: 2em;">
				<div class="row">
					<div class="col-xs-12">
						<h3>Oficina </h3>
					</div>
				</div>
			</div>

			<div class="container-fluid">
				<form action="#" role="form">
					<div class="form-group" >
						<label for="numero">Numero:</label>
						<input id="numero" type="text" placeholder="Numero" class="form-control" value="<?= $data['filOfi']['numero'] ?>" required>
					</div>

					<div class="form-group" >
						<label for="telefono">Telefono:</label>
						<input id="telefono" type="text" placeholder="Telefono" class="form-control" value="<?= $data['filOfi']['telefono'] ?>" required>
					</div>

					<div class="form-group" >
						<label for="estado">Estado:</label>
						<select name="estado" id="estado" class="form-control">
							<option value="1">Jalisco</option>
						</select>		
					</div>

					<div class="form-group" >
						<label for="estado">Municipio:</label>
						<select name="estado" id="municipio" class="form-control">
							<option value="1">Puerto Vallarta</option>
						</select>		
					</div>

					<div class="form-group" >
						<label for="colonia">Colonia:</label>
						<select name="colonia" id="colonia" class="form-control">
							<option value="1">Bobadilla</option>
						</select>	
					</div>
					
					<div class="form-group" >
						<label for="direccion">Direccion:</label>
						<input type="text" name="direccion" id="direccion" class="form-control" placeholder="Direccion" value="<?= $data['filOfi']['direccion'] ?>">
					</div>

					<input type="hidden" name="ofiId" value="<?= $data['filOfi']['id'] ?>">
					
					<div class="form-group" >
						<button type="submit" class="btn btn-primary">Guardar Cambios</button>
					</div>

				</form>
			</div>


        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php require_once APP_PATH.'views/admin/partials/foot.view.php' ?>