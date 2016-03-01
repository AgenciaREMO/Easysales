<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet" media="screen">
		<link href="<?= base_url('css/modern-business.css') ?>" rel="stylesheet">
		<link href="<?= base_url('font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
		<title> REMO | CLIENTES </title>
		<style>
		.confirmar{
	width:80%;
	margin:5% 10% 5% 10%;
	height:auto;
	background-color:#2FC479;
	border:1px solid:#319364;
	-webkit-border-radius:4px;
	-moz-border-radius:4px;
	border-radius:4px;
	}
	.confirmar p{padding:10px;
	color:#063;}
	</style>
	</head>
<body>
	
	<?php
	//Quitar mensajes
	
	error_reporting(0);
	
	switch($_REQUEST['msg']){
		
		case 1: ?>
			<div class="alert alert-success">¡MENSAJE! Los datos se guardaron correctamente</div>
			<?php
			break;
		
		case 2: ?>
		
			<div class="alert alert-success">¡MENSAJE! Los datos se eliminaron correctamente</div>
			<?php
			break;
		case 3: 
		
			echo '<div class="confirmar"><p><b>¡Mensaje! </b> ¡El tamaño de la imagen no debe exceder!
			</p></div>';
			
			break;
		
		}
		
?>

</body>
</html>
