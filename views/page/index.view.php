<?php require_once APP_PATH.'views/partials/head.view.php'; ?>
<?php require_once APP_PATH.'views/partials/nav.view.php'; ?>

		<!----//start-banner---->
		<div class="banner text-center">
				<div class="container">
					<div class="banner-info">
						<h1>Disfruta de tus vacaciones <br>en los mejores lugares de México</h1>
						<p>Reserva tu viaje con anticipación<br>y disfruta de nuestro servicio</p>
						<label class="page-scroll"><a class="banner-btn class scroll" href="#feature"><span> </span></a></label>
				    </div>
				</div>
		</div>
		<!----//end-banner---->
		<!----//start-content---->
		<div class="main">
		   <div class="content_white">
			<h2>Servicios</h2>
			<p>Ponte comodo, conocemos el camino</p>
		   </div>
		   <div class="featured_content" id="feature">
		   	 <div class="container">
			   	<div class="row text-center">
			   		<div class="col-md-3 feature_grid1">
			   			<i class="fa fa-road fa-5x icon1"> </i>
			   			<h3 class="m_1"><a href="<?= PUBLIC_PATH ?>directo">Directos</a></h3>
			   			<p class="m_2">
			   				<span class="fa fa-check"></span> Reservacion con anticipación<br>
			   				<span class="fa fa-check"></span> Operadores capacitados<br>
			   				<span class="fa fa-check"></span> Seguro de pasajero
			   			</p>	
			   			<a href="<?= PUBLIC_PATH ?>directo" class="feature_btn">Ver mas</a>
			   		</div>
			   		<div class="col-md-3 feature_grid1">
			   			<i class="fa fa-user fa-5x icon1"> </i>
			   			<h3 class="m_1"><a href="<?= PUBLIC_PATH ?>especial">Especiales</a></h3>
			   			<p class="m_2">
			   				<span class="fa fa-check"></span> Disponibilidad Garantizada<br>
			   				<span class="fa fa-check"></span> Viajes a toda la Republica Mexicana<br>
			   			</p>
			   			<a href="<?= PUBLIC_PATH ?>especial" class="feature_btn">Ver mas</a>
			   		</div>
			   		<div class="col-md-3 feature_grid1">
			   			<i class="fa fa-users fa-5x icon1"> </i>
			   			<h3 class="m_1"><a href="<?= PUBLIC_PATH ?>colectivo">Colectivos</a></h3>
			   			<p class="m_2">
			   				<span class="fa fa-check"></span> Tarifas Economicas<br>
			   				<span class="fa fa-check"></span> Salidas Frecuenes<br><br>
			   			</p>
			   			<a href="<?= PUBLIC_PATH ?>colectivo" class="feature_btn">Ver mas</a>
			   		</div>
			   		<div class="col-md-3 feature_grid2">
			   			<i class="fa fa-bus fa-5x icon1"> </i>
			   			<h3 class="m_1"><a href="<?= PUBLIC_PATH ?>camioneta">Camionetas</a></h3>
			   			<p class="m_2">
			   				<span class="fa fa-check"></span> Aire Acondicionado<br>
			   				<span class="fa fa-check"></span> Asientos de Piel<br><br>
			   			</p>
			   			<a href="#camionetas" class="feature_btn">Ver mas</a>
			   		</div>
			   	</div>
		    </div>
		   </div>
		   <div class="content_white">
			<h2>Viaja a destinos en toda la republica mexicana</h2>
			<p>Años ofreciendo la mejor experiencia de viaje</p>
		  </div>
		  <div class="m_3"><span class="left_line"> </span> <span class="right_line"> </span></div>
		  <div class="container">
			  <ul id="flexiselDemo3">
				<li><img src="<?= PUBLIC_PATH ?>assets/images/p1.jpg" class="img-responsive" alt=""/></li>
				<li><img src="<?= PUBLIC_PATH ?>assets/images/p2.jpg" class="img-responsive" alt=""/></li>
				<li><img src="<?= PUBLIC_PATH ?>assets/images/p3.jpg" class="img-responsive" alt=""/></li>
				<li><img src="<?= PUBLIC_PATH ?>assets/images/p4.jpg" class="img-responsive" alt=""/></li>
			 </ul>
			 <script type="text/javascript">
				$(window).load(function() {
					
					$("#flexiselDemo3").flexisel({
						visibleItems: 4,
						animationSpeed: 1000,
						autoPlay: true,
						autoPlaySpeed: 3000,    		
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
				    	responsiveBreakpoints: { 
				    		portrait: { 
				    			changePoint:480,
				    			visibleItems: 1
				    		}, 
				    		landscape: { 
				    			changePoint:640,
				    			visibleItems: 2
				    		},
				    		tablet: { 
				    			changePoint:768,
				    			visibleItems: 3
				    		}
				    	}
				    });
				    
				});
			</script>
			<script type="text/javascript" src="<?= PUBLIC_PATH ?>assets/js/jquery.flexisel.js"></script>
		   <div class="testmonial" id="camionetas"> 
		    <div class="row testmonial_top">
		    	<div class="col-md-6">
		    		<ul class="test_box">
		    			<li class="test_img"><img src="<?= PUBLIC_PATH ?>assets/images/pic1.jpg" class="img-responsive" alt=""/> </li>
						<li class="test_desc">
							<h4><a href="<?= PUBLIC_PATH ?>camioneta">NISSAN NV350</a></h4>
							<p>Es la camioneta tipo van para pasajeros más exitosa. Por durabilidad y calidad con capacidad de 15 pasajeros.<a href="<?= PUBLIC_PATH ?>camioneta" class="test_btn">   + ver mas</a></p>
					    </li>	
					    <div class="clearfix">	</div>    				
		    		</ul>
		    	</div>
		    	<div class="col-md-6">
		    		<ul class="test_box">
		    			<li class="test_img"><img src="<?= PUBLIC_PATH ?>assets/images/pic2.jpg" class="img-responsive" alt=""/> </li>
						<li class="test_desc">
							<h4><a href="<?= PUBLIC_PATH ?>camioneta">NISSAN NV200</a></h4>
							<p>Capacidad de 5 pasajeros comodamente sentados con aire acondicionado y musica. Un costo menor a diferencia de las demas vans <a href="<?= PUBLIC_PATH ?>camioneta" class="test_btn">   + ver mas</a></p>
					    </li>	
					    <div class="clearfix">	</div>    		    				
		    		</ul>
		    	</div>
		    </div>	
		    <div class="row testmonial_bottom">
		    	<div class="col-md-6">
		    		<ul class="test_box">
		    			<li class="test_img"><img src="<?= PUBLIC_PATH ?>assets/images/pic3.jpg" class="img-responsive" alt=""/> </li>
						<li class="test_desc">
							<h4><a href="<?= PUBLIC_PATH ?>camioneta">TOYOTA HIACE</a></h4>
							<p>Cuenta con un gran espacio para transportar hasta 15 pasajeros comodamente sentados y aire acondicionado en la parte trasera. <a href="<?= PUBLIC_PATH ?>camioneta" class="test_btn">   + ver mas</a></p>
					    </li>	
					    <div class="clearfix">	</div>    		    				
		    		</ul>
		    	</div>
		    	<div class="col-md-6">
		    		<ul class="test_box">
		    			<li class="test_img"><img src="<?= PUBLIC_PATH ?>assets/images/pic4.jpg" class="img-responsive" alt=""/> </li>
						<li class="test_desc">
							<h4><a href="<?= PUBLIC_PATH ?>camioneta">MERCEDES SPRINTER</a></h4>
							<p>Amplio y acogedor: la combinación de confort, dimensiones generosas y variabilidad hace del habitáculo de la nueva Sprinter Pasaje un espacio agradable para un máximo de 23 personas.
							<a href="<?= PUBLIC_PATH ?>camioneta" class="test_btn">   + ver mas</a></p>
					    </li>	
					    <div class="clearfix">	</div>    		    				
		    		</ul>
		    	</div>
		    </div>	
		  </div>    
		</div>
		
<?php require_once APP_PATH.'views/partials/foot.view.php'; ?>