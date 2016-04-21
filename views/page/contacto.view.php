<?php require_once APP_PATH.'views/partials/head.view.php'; ?>
<?php require_once APP_PATH.'views/partials/nav.view.php'; ?>

		<div class="about">
		 <!----//start-banner---->
		  <div class="container">
			<section class="title-section">
				<h1 class="title-header">
				Contact</h1>
				<ul class="breadcrumb breadcrumb__t"><li><a href="<?= PUBLIC_PATH ?>">Principal</a></li><li class="active">Contacto</li></ul>  
			</section> 
	       </div>
		</div>
		<div class="contact">
			<div class="container">
				<h2 class='item_title'>Contacto</h2>
			    <div class="map">
				  <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d466.8285930275039!2d-105.23260913865776!3d20.603213568037024!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1461175155818" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px"></a></small>
			    </div>
                <div class="row contact_top">
                	<div class="col-md-4 contact_details">
                	   <h5>Dirección :</h5>
                	   <i class="address"></i>
                	   <div class="contact_address">
						Puerto Vallarta Jalisco<br>
						Basilio Badillo #136<br>
						</div>
						<i class="address"></i>
                	   <div class="contact_address">
						Tomatlan Jalisco<br>
						25 de Diciembre #24<br>
						</div>
                	</div>
                	<div class="col-md-4 contact_details">
                	   <h5>Teléfono :</h5>
                	   <i class="phone"></i>
                	   <div class="contact_address">
						044-322-888-7465<br>
						044-322-456-7654<br>
					   </div>
                	</div>
                	<div class="col-md-4 contact_details">
                	   <h5>Correo :</h5>
                	   <i class="mail"></i>
                	   <div class="contact_mail">
						manuel.161293@gmail.com
					   </div>
                	</div>
                </div>
                <div class="contact_bottom">
                   <h3>Envianos tus comentarios, son muy importantes para nosotros</h3>
                   <p>Usted es el único responsable de cualquier y toda la información proporcionada por usted directamente en el sitio web. Tenga en cuenta que cualquier comentario hecho en una empresa de transporte debe ser el resultado de su experiencia real, que de hecho ocurrió.</p>
                   <form method="post" action="contact-post.html">
					<div class="contact-to">
                     	<input type="text" class="text" placeholder="Nombre..." >
					 	<input type="text" class="text" placeholder="Apellido" style="margin-left: 10px">
					 	<input type="email" class="text" placeholder="Correo..." style="margin-left: 10px">
					</div>
					<div class="contact-to">
                     	<input type="text" class="text" placeholder="Telefono...">
					</div>
					<div class="text2">
	                   <textarea placeholder="Mensaje..."></textarea>
	                </div>
	                <div>
	               		<input type="submit" value="Enviar" class="submit">
	                </div>
	             </form>
                </div>
			</div>
		</div>

<?php require_once APP_PATH.'views/partials/foot.view.php'; ?>