<html>
<head>
<link href="../../css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="../../css/modern-business.css" rel="stylesheet">
<link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>

 <div class="container">
	<div class="row">
	<br>
	<br>
			<div class="col-md-offset-4 col-md-4">
					<div class="img_logo">
					<img src="../img/logo_remo_diseno_innovacion.png" alt="logo" />
					</div>
					<br/>
					<br/>
					<div class="well">
						<div class="row">
							<div class="col-md-12">
								
							
									
								<?= form_open('home/ingresar', array('class'=>'form-horizontal')); ?>
								
									<h3>Ingreso al sistema</h3>
									<?= my_validation_errors(validation_errors()); ?>  <!--Aqui puse my_validation para poder personalizarlos en helper-->
									<div class="form-group">
											<?= form_label('Usuario', 'login', array('class'=>'control-label')); ?>
											<?= form_input(array('class'=>'form-control', 'type'=>'text', 'name'=>'login', 'id'=>'login', 'placeholder' => 'Usuario...', 'value'=>set_value('login')));?>
									</div>
									<div class="form-group">
											<?= form_label('Password', 'password', array('class'=>'control-label')); ?>
											<?= form_input(array('class'=>'form-control','type'=>'password', 'name'=>'password', 'id'=>'password','placeholder'=>'********', 'value'=>set_value('password')));?>
									</div>
									<br/>
									<div class="form-actions">
											<?= form_button(array('type'=>'submit', 'content'=>'ingresar', 'class'=>'btn btn-primary')); ?>
											<?= anchor('home/acerda_de', 'Cancelar', array('class'=>'btn')); ?>
									</div>
								<?= form_close(); ?>
									
								</div>
								
							</div>
						
					
						
					</div>
					
		</div> <!--Col-->
	</div> <!--row-->
 </div> <!--Container-->

  
</body>
</html>