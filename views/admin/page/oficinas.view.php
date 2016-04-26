<?php require_once APP_PATH.'views/admin/partials/head.view.php' ?>

	<?php if(isset($data['error']) && !empty($data['error'])): ?>
        <div class="alert alert-danger">
            <?= $data['error']; ?>
        </div>
    <?php endif; ?>

    <div id="wrapper">
    
    <?php require_once APP_PATH.'views/admin/partials/nav.view.php' ?>

        <div id="page-wrapper">

			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h3>Listado de oficinas</h3>
					</div>
				</div>
				<div class="row" style="padding: 2em 0;">
					<div class="col-xs-12">
						<a href="" class="btn btn-success">+ oficina</a>
					</div>
				</div>
			</div>

			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th>Oficina  No.</th>
						<th>Telefono</th>
						<th>Direccion</th>
						<th>Colonia</th>
						<th>Municipio</th>
						<th>Accion</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($data['tableOfi'] as $key => $value): ?>
						<tr>
							<td><?= $value['numero'] ?></td>
							<td><?= $value['telefono'] ?></td>
							<td><?= $value['direccion'] ?></td>
							<td><?= $value['colonia'] ?></td>
							<td><?= $value['municipio'] ?></td>
							<td>
								<a href="<?= PUBLIC_PATH ?>oficina?of=<?= $value['id'] ?>" title="Editar" class="btn btn-primary">Editar</a>
								<a href="<?= PUBLIC_PATH ?>oficina?of=<?= $value['id'] ?>" title="Ver Rutas" class="btn btn-success">Rutas</a>
								<a href="<?= PUBLIC_PATH ?>oficina?of=<?= $value['id'] ?>" title="Eliminar" class="btn btn-danger">X</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php require_once APP_PATH.'views/admin/partials/foot.view.php' ?>