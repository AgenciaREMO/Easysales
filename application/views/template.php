<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet" media="screen">
		<link href="<?= base_url('css/modern-business.css') ?>" rel="stylesheet">
		<link href="<?= base_url('font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
		<title> Mi Sitio </title>
	</head>

	<body>
		<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="../../img/logo-remo.png" alt=""/></a>

                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                         <li>
                            <a href="/Prueba/index.php/clientes/index">Clientes</a>
                        </li>
                        <li>
                            <a href="http://localhost/Prueba/index.php/personal/index">Personal</a>
                        </li>
                        <li>
                            <a href="http://localhost/Prueba/index.php/proyectos/index">Proyectos</a>
                        </li>
                         <li>
                            <a href="http://localhost/Prueba/index.php/empresas/mostrar">Empresas</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="http://localhost/Prueba/index.php/home/cambiar_clave">Cambiar contraseña</a> 
                        </li>
                        <li><a href="http://localhost/Prueba/index.php/home/salir">Cerrar sesión </a></li>
                    </ul>
                        <!--
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="portfolio-1-col.html">1 Column Portfolio</a>
                                </li>
                                <li>
                                    <a href="portfolio-2-col.html">2 Column Portfolio</a>
                                </li>
                                <li>
                                    <a href="portfolio-3-col.html">3 Column Portfolio</a>
                                </li>
                                <li>
                                    <a href="portfolio-4-col.html">4 Column Portfolio</a>
                                </li>
                                <li>
                                    <a href="portfolio-item.html">Single Portfolio Item</a>
                                </li>
                            </ul>
                        </li>
                        -->                    
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <!--/.nav -->

        <!-- Contenido dividos en 2, una parte izquierda para el menú, una parte central para las vistas -->

		<div class="container">
            <?= $this->load->view($contenido) ?>
        </div>

        <!---<div class="container">
            <div class="row">
                <div class="col-md-offset-4 col-md-4 text-center">
                    <h5>
                        REMO DISE&Ntilde;O E INOVACI&Oacute;N
                    </h5>
                    <p> &copy; Sistema para el control de Birefs 2015 <br><br> Bienvenido: <?=        $this->session->userdata('usuario'); date('d-m-Y H:i') ?> </p>
                </div><!--/ col -->
               
            </div><!--/ row -->
        </div><!--/ container --> -->





        <!--/container -->
		<script src="<?= base_url('js/jquery.js') ?>"></script>
    	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
	</body>
</html>
