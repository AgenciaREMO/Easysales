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
		        <!-- Contenido dividos en 2, una parte izquierda para el menú, una parte central para las vistas -->
		
        <!--/container -->

        <div class="container">
            <hr/>
            <div class="row">
                <div class="col-md-offset-4 col-md-4 text-center">
                    <h5>
                        REMO DISE&Ntilde;O E INOVACI&Oacute;N
                    </h5>
                    <p> &copy; Sistema para el control de briefs 2015 <br><br> Bienvenido: <?=        $this->session->userdata('usuario'); date('d-m-Y H:i') ?> </p>
                </div><!--/ col -->
               
            </div><!--/ row -->
        </div><!--/ container -->

		<script src="<?= base_url('js/jquery.js') ?>"></script>
    	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
	</body>
</html>
