<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
	
	<title>REMO|AGREGAR USUARIO</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" href="../../css/style.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="../../css/bootstrap-theme.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="../../js/bootstrap.min.js"></script>
</head>
<?=$this->load->view('empresas/menu');?>
<body>
<div class="container">

	<div class="row">
		<div class="col-md-offset-4 col-md-4 col-md-offset-4">
		<div class="cuadro_1">	
		<img src="../../img/logo_remo_diseno_innovacion - copia.png" alt="logo" />
			<h1>Registrar Usuario</h1>
			<br>
			<br>
			<form class="form-horizontal" role="form" action="<?=base_url()?>index.php/home/guardar_usuario" method="post" enctype="multipart/form-data">
			  <div class="form-group">
				<label for="ejemplo_email_3" class="col-lg-2 control-label">Nombre</label>
				<div class="col-lg-10">
				  <input type="text" class="form-control" id="name" name="name" placeholder="Nombre del usuario">
				</div>
			  </div>
			  <div class="form-group">
				<label for="ejemplo_password_3" class="col-lg-2 control-label">Usuario</label>
				<div class="col-lg-10">
				  <input type="text" class="form-control" id="login" name="login" placeholder="usuario">
				</div>
			  </div>
			  <div class="form-group">
				<label for="ejemplo_password_3" class="col-lg-2 control-label">Contrasena</label>
				<div class="col-lg-10">
				  <input type="password" class="form-control" id="password" name="password" placeholder="Contrasenaa">
				</div>
			  </div>
			  <div class="form-group">
				<div class="col-lg-offset-2 col-lg-10">
				  <button type="submit" class="btn btn-primary">Registrar</button>
				</div>
			  </div>
			</form>    									  
		</div> <!--Col-->
	</div> <!--row-->
</div> <!--row-->
</div> <!--Container-->
</body>
<?=$this->load->view('empresas/pie_pagina');?>
</html>