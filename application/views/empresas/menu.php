<!DOCTYPE html>
<html lang="es">
	<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
		
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
                    <!--<a class="navbar-brand" href="index.html"><img src="../../../img/logo-remo.png" alt=""/></a>-->
                     <a class="navbar-brand" href="index.html"><img src="http://remo.mx/easysales/img/logo-remo.png" alt=""/></a>

                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                         <li>
                            <a href="/easysales/index.php/clientes/mostrar">Clientes</a>
                        </li>
                        <li>
                            <a href="http://remo.mx/easysales/index.php/personal/mostrar">Personal</a>
                        </li>
                        <li>
                            <a href="http://remo.mx/easysales/index.php/proyectos/mostrar">Proyectos</a>
                        </li>
                         <li>
                            <a href="http://remo.mx/easysales/index.php/empresas/mostrar">Empresas</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
       
                        <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span 		class="glyphicon glyphicon-user" aria-hidden="true"></span> Usuario<span class="caret"></span></a>
						<ul class="dropdown-menu">
						<li><a href="http://remo.mx/easysales/index.php/home/ingresar_usuarios">Registrar usuario</a></li>
						<li><a href="http://remo.mx/easysales/index.php/home/cambiar_clave">Cambiar contrasena</a> </li>
						  <li role="separator" class="divider"></li>
						  <li><a href="http://remo.mx/easysales/index.php/home/salir">Cerrar sesion </a></li>
						</ul>
					  </li>
                    </ul>
                    </ul>
				</ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
	