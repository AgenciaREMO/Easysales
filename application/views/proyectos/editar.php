<html lang="es">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet" media="screen">
		<link href="<?= base_url('css/modern-business.css') ?>" rel="stylesheet">
		<link href="<?= base_url('font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
		<title>REMO | PROYECTOS </title>
	</head>
<?=$this->load->view('empresas/menu');?>
<div class="container">
		<div class="row">
			<div class="col-md-12">    
	    	<h3>Editar Proyecto</h3>
				<form  id="form" name="form" action="<?=base_url()?>index.php/proyectos/editarparametros/<?=$id_proyecto?>" method="POST"> 
					<div class="col-md-12 form-group">
							<label for="antecedentes">Nombre del proyecto</label>
							<input class="form-control" type="text" size="20" name="nombre" id="nombre" value="<?=$nombre?>">	
							<?php $personal=$id_personal;
							$cliente=$id_cliente;	    ?>
					</div><!--/ col 12-->	
					<div class="col-md-4 form-group">
							<label>
								Cliente
							</label>
							<select name="id_nombres" class="form-control">
								<option value="">
									Selecciona una opci&oacute;n
								</option>
								<?php 
									if($nom_cliente != FALSE){
										foreach ($nom_cliente -> result() as $row) {
											$idcliente=$row->id_cliente; 
											$nom=$row->nombre;?>
											<option value="<?php echo "$idcliente";?>"<?php if($idcliente == $cliente){echo"selected";}; ?>><?php echo "$nom";?></option>
											<?php
											}
										} else {
												echo "<option value=''>No existen registros</option>";
										}
								?>							  							
							</select>
						</div>
						<!---------checked----------------------selected-->
						<div class="col-md-4 form-group">
							<label>
								L&iacute;der de proyecto<!--Personal-->
							</label>
							<select class="form-control" name="id_personales" >
								
							<?php 
							if($nom_persnonal != FALSE){
								foreach ($nom_persnonal -> result() as $row) {
									$idpersonal=$row->id_personal;
									$nomp=$row->nombre;?>
									<option value="<?php echo "$idpersonal";?>"<?php if($idpersonal == $personal){echo"selected";}; ?>><?php echo "$nomp";?></option>
											<?php
									
									}
								} else {
								echo "<option value=''>No existen registros</option>";
								}
								?>
							</select>					
						</div><!--/ col -->	
						<div class="col-md-4 form-group">
							<label for="mision">Depto responsable</label>
						  	<input class="form-control" type="text" name="depto_responsable" id="depto_responsable" value="<?=$depto_responsable?>">
						</div><!--/ col -->						
						<div class="col-md-12 form-group">
							<label for="alcance">Alcance</label>
						  	<input class="form-control" type="text" name="alcance" id="alcance" value="<?=$alcance?>">
						</div><!--/ col -->						
						<div class="col-md-12 form-group">
							 <label for="alcance">Antecedentes</label>
						  	<input class="form-control" type="text" name="antecedentes" id="antecedentes" value="<?=$antecedentes?>">
						</div><!--/ col -->		
						<div class="col-md-4 form-group">
							<label for="alcance">Fecha de inicio</label>
						  	<input class="form-control" type="text" name="f_inicio" id="f_inicio" value="<?=$f_inicio?>">
						</div><!--/ col -->		
						<div class="col-md-4 form-group">
							<label for="alcance">Fecha de termino</label>
						  	<input class="form-control" type="text" name="f_termino" id="f_termino" value="<?=$f_termino?>">
						</div><!--/ col -->		
						<?$var="HOLA"; ?>
						<div class="col-md-4 form-group">
							<?php if($resultado_estatus==1){
								$res="Prospección";
								
							}else{
								$res="Oportunidad";
							}
							?>
							<label for="diferenciador">Resultado estatus</label>
							<select class="form-control" name="estatus" >
									<option value="1" <?php if($resultado_estatus == '1'){echo"selected";}; ?>>Prospección</option>
									<option value="2" <?php if($resultado_estatus == '2') {echo"selected";}; ?>>Oportunidad</option>
							</select>
							<br>


							
							
							
							<br>
							<input class="btn btn-primary" type="submit" name="editar" id"editar" value="Editar datos" />
							
  				</div>
				</form>
			</div>
        </div>
  	</div>
	<?=$this->load->view('empresas/pie_pagina');?>