<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ingreso</title>
	<style>
	
	</style>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../../css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="../../css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="../../js/bootstrap.min.js"></script>
</head>
<body>
 <div class="container">
	<div class="row">
			<div class="col-md-offset-3 col-md-6">
					<div class="img_logo">
					<img src="../../../img/logo_remo_diseno_innovacion.png" alt=""/>
					</div>
					<?= form_open('home/ingresar', array('class'=>'form-horizontal')); ?>
					 <form class="form-signin">
						<h3>Ingreso al sistema</h3>
						<?= my_validation_errors(validation_errors()); ?>  <!--Aqui puse my_validation para poder personalizarlos en helper-->
						<div class="control-group">
								<?= form_label('Usuario :', 'login', array('class'=>'control-label')); ?>
								<?= form_input(array('class'=>'form-control', 'type'=>'text', 'name'=>'login', 'id'=>'login', 'placeholder' => 'Usuario...', 'value'=>set_value('login')));?>
						</div>
						<div class="control-group">
								<?= form_label('Password :', 'password', array('class'=>'control-label')); ?>
								<?= form_input(array('class'=>'form-control', 'type'=>'password', 'name'=>'password', 'id'=>'password','placeholder'=>'********', 'value'=>set_value('password')));?>
						</div>
						<div class="form-actions">
								<?= form_button(array('type'=>'submit', 'content'=>'ingresar', 'class'=>'btn btn-primary')); ?>
								<?= anchor('home/index', 'Cancelar', array('class'=>'btn')); ?>
						</div>
					</form>
					<?= form_close(); ?>
		</div> <!--Col-->
	</div> <!--row-->
 </div> <!--Container-->

  
</body>
</html>