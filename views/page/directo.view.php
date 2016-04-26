<?php require_once APP_PATH.'views/partials/head.view.php'; ?>
<?php require_once APP_PATH.'views/partials/nav.view.php'; ?>

		<div class="about">
		 <!----//start-banner---->
		  <div class="container">
			<section class="title-section">
				<h1 class="title-header">
				Viaje Directo </h1>
				<ul class="breadcrumb breadcrumb__t"><li><a href="<?= PUBLIC_PATH ?>">Principal</a></li><li class="active">Directo</li></ul>  
			</section> 
	       </div>
		</div>



		<!--//Empieza formulario viajes directos---->
		<div class="container">
            <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <div class="panel panel-login">
                <div class="panel-body">
                  <div class="row">
                    <div class="col-lg-12">


                      <form id="login-form" action="<?= PUBLIC_PATH ?>directobuy" method="POST" role="form" style="display: block; margin-top: 2em">


                      	<div class="form-group">
                            <label for="origen">Lugar de origen:</label>
                            <select name="origen" id="origen" class="form-control">
                            	<option value="kd">Puerto Vallarta</option>
                            	<option value="asd">Tomatlan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="destino">Lugar de destino:</label>
                            <select name="origen" id="destino" class="form-control">
                            	<option value="kd">Puerto Vallarta</option>
                            	<option value="asd">Tomatlan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="fecha">Fecha:</label>
                            <input type="DATE" id="des" name="fecha" required tabindex="1" class="form-control">
                            </input>
                        </div>

                        <div class="form-group">
                        	<label for="optradio" style="margin-right: 2em">Tipo de viaje: </label>
                       		<label class="radio-inline"><input type="radio" name="tipo" checked>Sencillo</label>
							<label class="radio-inline"><input type="radio" name="tipo">Redondo</label>
						</div>

                        <div class="form-group">
                            <label for="gasto">Precio:</label>
							<p>$ 5000.00</p>
                        </div>
  


                        <div class="form-group">
                          	<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="submit" value="Comprar">
                        </div>


                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
		<!--//termina formulario---->


		
<?php require_once APP_PATH.'views/partials/foot.view.php'; ?>