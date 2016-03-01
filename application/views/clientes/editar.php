<html lang="es">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet" media="screen">
		<link href="<?= base_url('css/modern-business.css') ?>" rel="stylesheet">
		<link href="<?= base_url('font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
		<title>REMO | CLIENTES </title>
	</head>
<?=$this->load->view('empresas/menu');?>
<legend></legend>

     <div class="container">
		<div class="row">
			<div class="col-md-12">    
	    	<h3>EDITAR CLIENTE</h3>
				<form  id="form" name="form" action="<?=base_url()?>index.php/clientes/editarparametros/<?=$id_cliente?>" method="POST">  
				<form>

					<div class="col-md-12 form-group">
							<label for="antecedentes">Nombre del Cliente</label>
							<input class="form-control" type="text" size="20" name="nombre" id="nombre" value="<?=$nombre?>">				    
					</div><!--/ col -->	
					<div class="col-md-4 form-group">
							<label for="puesto">Puesto</label>
						  	<input class="form-control" type="text" name="puesto" id="puesto" value="<?=$puesto?>">
					</div><!--/ col -->		
				    <div class="col-md-4 form-group">
					<label>
						Empresa:
					</label>
					<select class="form-control" name="id_empresas" >
					  <?php 
					  if($nom_empresa != FALSE){
					      foreach ($nom_empresa -> result() as $row) {
					      	$idempresa=$row->id_empresa;
							$nome=$row->nombre_empresa; ?>
							<option value="<?php echo "$idempresa";?>"<?php if($idempresa == $empresa){echo"selected";}; ?>><?php echo "$nome";?></option>
											<?php
						   	
								}
						} else {
								echo "No Existen Registros";
								}
						?>
					</select>
					</div><!--/ col -->	
					<div class="col-md-4 form-group">
						<label for="mision">Tipo de cliente</label>
						<input class="form-control" type="text" size="20" name="tipo_cliente" id="tipo_cliente" value="<?=$tipo_cliente?>">
				    </div><!--/ col -->	
					<div class="col-md-4 form-group">
				    <label for="valores">Teléfono</label>
				      <input class="form-control" type="text" size="30" name="telefono" id="telefono" value="<?=$telefono?>">
				     </div><!--/ col -->	
					<div class="col-md-4 form-group">
				    <label for="servicios_productos">Celular</label>
				      <input class="form-control" type="text" size="20" name="celular" id="celular" value="<?=$celular?>">
					 </div><!--/ col -->
				    <div class="col-md-4 form-group">
				    <label for="diferenciador">email</label>
				      <input class="form-control" type="text" size="20" name="email" id="email" value="<?=$email?>">
					 
				      <br/>
							<input class="btn btn-primary" type="submit" name="guardar" id"guardar" value="Editar datos" />
  				</div>
					</div><!--/ col -->
  				</div>
				</form>
			</div>
        </div>
  	</div>
	<?=$this->load->view('empresas/pie_pagina');?>