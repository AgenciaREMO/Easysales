<<html lang="en">
<head>
	<meta charset="utf-8">
	<title>REMO|CONTRASEÑA</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" href="../../css/style.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="../../css/bootstrap-theme.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="../../js/bootstrap.min.js"></script>
</head>
<?=$this->load->view('empresas/menu');?>
</head>
<body>
<div class="container">
	<div class="row">
			<div class="col-md-offset-3 col-md-6 col-md-offset-3">
			<div class="cuadro_1">	
			<img src="../../img/logo_remo_diseno_innovacion - copia.png" alt="logo" />
			<h1>Cambiar Contraseña</h1>
            	<br>				
				 <?= form_open('home/cambiar_clave', array('class'=>'form-horizontal')); ?>
					  <br>
					  <?= my_validation_errors(validation_errors()); ?>
					  <div class="control-group">
						<?= form_label ('Contraseña actual:', 'clave_act', array('class'=>'col-lg-4 control-label')); ?>
						<div class="col-lg-8">
							<?= form_input(array('class'=>'form-control','type'=>'password', 'name'=>'clave_act', 'id'=>'clave_act', 'value'=>set_value('clave_act'))); ?>
						</div>
					  </div>
					  
					  <div class="control-group">
						<?= form_label('Contraseña nueva', 'clave_new', array('class'=>'col-lg-4 control-label')); ?>
						<div class="col-lg-8">
							<?= form_input(array('class'=>'form-control','type'=>'password', 'name'=>'clave_new', 'id'=>'clave_new', 'value'=>set_value('clave_new'))); ?>
						</div>
					  </div>
					  <div class="control-group">
						<?= form_label('Repetir la contraseña', 'clave_rep', array('class'=>'col-lg-4 control-label')); ?>
						<div class="col-lg-8">
							<?= form_input(array('class'=>'form-control','type'=>'password', 'name'=>'clave_rep', 'id'=>'clave_rep', 'value'=>set_value('clave_rep'))); ?>
						</div>
					  </div>
						  <div class="form-actions">
						   <?= form_button(array('type'=>'submit', 'content'=>'Confirmar', 'class'=>'col-lg-offset-2 btn btn-primary')); ?>
						   <?= anchor('home/index', 'Cancelar', array('class'=>'btn')); ?>
						  </div>
					
					 <?= form_close(); ?>
			</div> 
		</div> 
	</div> 
 </div> 
 <?=$this->load->view('empresas/pie_pagina');?>
</body>
</html>