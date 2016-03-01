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
                            <a href="/Prueba/index.php/clientes/mostrar">Clientes</a>
                        </li>
                        <li>
                            <a href="http://localhost/Prueba/index.php/personal/mostrar">Personal</a>
                        </li>
                        <li>
                            <a href="http://localhost/Prueba/index.php/proyectos/mostrar">Proyectos</a>
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
				</ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
	