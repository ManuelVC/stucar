 <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">PANEL::ADMINISTRACIÓN</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<? PUBLIC_PATH ?>../admin"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesión</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>

            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?= PUBLIC_PATH ?>panel"><i class="fa fa-home fa-fw"></i> Panel Principal</a>
                        </li>

                        <li>
                            <a href="<?= PUBLIC_PATH ?>panel"><i class="fa fa-home fa-fw"></i> Oficinas</a>
                        </li>

                        <li>
                            <a class="submenu"><i class="fa fa-car fa-fw"></i> Viajes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level --hidden show">
                                <li>
                                    <a href="<? PUBLIC_PATH ?>directos"><i class="fa fa-road fa-fw"></i> Directos</a>
                                </li>
                                <li>
                                    <a href="buttons.html"><i class="fa fa-user fa-fw"></i> Especiales</a>
                                </li>
                                <li>
                                    <a href="buttons.html"><i class="fa fa-users fa-fw"></i> Colectivos</a>
                                </li>
                                <li>
                                    <a href="notifications.html"><i class="fa fa-users fa-fw"></i> Todos</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>


                        <li>
                            <a class="submenu"><i class="fa fa-road fa-fw"></i> Rutas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level --hidden show">
                                <li>
                                    <a href="panels-wells.html"><i class="fa fa-road fa-fw"></i> Ver Rutas</a>
                                </li>
                                <li>
                                    <a href="buttons.html"><i class="fa fa-clock fa-fw"></i> Horarios</a>
                                </li>
                                <li>
                                    <a href="buttons.html"><i class="fa fa-users fa-fw"></i> Lugares</a>
                                </li>

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a class="submenu"><i class="fa fa-user fa-fw"></i> Empleados<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level --hidden show">
                                <li>
                                    <a href="panels-wells.html"><i class="fa fa-road fa-fw"></i> Ver Empleados</a>
                                </li>
                                <li>
                                    <a href="buttons.html"><i class="fa fa-user fa-fw"></i> Camionetas</a>
                                </li>
                                <li>
                                    <a href="buttons.html"><i class="fa fa-users fa-fw"></i> Rentas</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a class="submenu"><i class="fa fa-pencil fa-fw"></i> Direccion<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level --hidden show">
                                <li>
                                    <a href="panels-wells.html"><i class="fa fa-road fa-fw"></i> Estados</a>
                                </li>
                                <li>
                                    <a href="buttons.html"><i class="fa fa-user fa-fw"></i> Municipios</a>
                                </li>
                                <li>
                                    <a href="buttons.html"><i class="fa fa-users fa-fw"></i> Colonias</a>
                                </li>

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->

        </nav>