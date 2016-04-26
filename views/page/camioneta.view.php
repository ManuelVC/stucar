<?php require_once APP_PATH.'views/partials/head.view.php'; ?>
<?php require_once APP_PATH.'views/partials/nav.view.php'; ?>


		<div class="about">
		 <!----//start-banner---->
		  <div class="container">
			<section class="title-section">
				<h1 class="title-header">
				Camionetas </h1>
				<ul class="breadcrumb breadcrumb__t"><li><a href="<?= PUBLIC_PATH ?>">Principal</a></li><li class="active">Camionetas</li></ul>  
			</section> 
	       </div>
		</div>

		
		<div class="container">
		
		<?php if(!empty($data['filaCam'])): ?>
			<div class="row car">
				<div class="col-md-6" >
					<img src="<?= PUBLIC_PATH ?>assets/images/vans/<?= $data['filaCam']['imagen']; ?>" width="500px" height:"300px" alt="">
				</div>

				<div class="col-md-6">
					<h2 class="car-title">Caracteristicas</h2>
					<ul class="car-list">
						<li><i class="fa fa-bus"></i><strong> Modelo: </strong> <?= $data['filaCam']['marca']; ?></li>
						<li><i class="fa fa-users"></i><strong> Capacidad: </strong> <?= $data['filaCam']['capacidad']; ?></li>
						<li><i class="fa fa-refresh fa-spin  fa-fw margin-bottom"></i><strong>A/C: </strong> <?= $data['filaCam']['ac']; ?></li>
						<li><i class="fa fa-tv"></i><strong> Television: </strong> <?= $data['filaCam']['television']; ?></li>
						<li><i class="fa fa-volume-up"></i><strong>  Audio: </strong> <?= $data['filaCam']['audio']; ?></li>				
					</ul>
				</div>
			</div>	
		<?php endif; ?>
			
		<?php require_once APP_PATH.'views/partials/camioneta.view.php';  ?>
		
		</div>
  
		

<?php require_once APP_PATH.'views/partials/foot.view.php'; ?>