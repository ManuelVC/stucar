<?php require_once APP_PATH.'views/partials/head.view.php'; ?>
<?php require_once APP_PATH.'views/partials/nav.view.php'; ?>


    <div class="about">
     <!----//start-banner---->
      <div class="container">
      <section class="title-section">
        <h1 class="title-header">
        Viaje Directo </h1>
        <ul class="breadcrumb breadcrumb__t"><li><a href="<?= PUBLIC_PATH ?>">Principal</a></li><li class="active">Directos/Compra</li></ul>  
      </section> 
         </div>
    </div>



  <!--//Empieza formulario viajes directos---->
    <div class="container">
            <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <div class="panel panel-login">
                

                <div>
                  <h2 style="margin-top: 2em">Puerto Vallarta - Tomatlan</h2>
                  <h4>Proporciona la siguiente informacion para finalizar la compra.</h4>
                </div>

                <div class="panel-body">
                  <div class="row">
                    <div class="col-lg-12">


                      <form id="login-form" role="form" style="display: block;">

                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" name="nombre" tabindex="1" class="form-control" placeholder="Nombre" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="apellidoP">Paterno:</label>
                            <input type="text" name="apellidoP" tabindex="1" class="form-control" placeholder="Apellido Paterno" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="apellidoM">Materno:</label>
                            <input type="text" name="apellidoM" tabindex="1" class="form-control" placeholder="Apellido Materno" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="tel">Telefono:</label>
                            <input type="tel" name="tel" tabindex="1" class="form-control" placeholder="Numero telefonico" required autofocus>
                        </div>

                        <div class="form-group">
                          <label for="correo">Correo:</label>
                          <input type="mail" name="correo" tabindex="1" placeholder="Correo" class="form-control">
                        </div>
  


                        <div class="form-group">
                          <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="submit" value="Finalizar">
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