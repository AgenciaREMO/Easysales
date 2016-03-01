<html lang="es">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet" media="screen">
		<link href="<?= base_url('css/modern-business.css') ?>" rel="stylesheet">
		<link href="<?= base_url('font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
		<!-- FormValidation plugin -->
<script src="/vendor/formvalidation/dist/js/formValidation.min.js"></script>

<!-- Add-ons. You should place it inside /vendor/formvalidation/dist/js/addons directory -->
<script src="/vendor/formvalidation/dist/js/addons/mandatoryIcon.js"></script>
		<title>REMO | EMPRESA </title>
	</head>
<?=$this->load->view('empresas/menu');?>
     <div class="container">
		<div class="row">
			<div class="col-md-12">  
			<h1>AGREGAR EMPRESA</h1>	
				<form data-toggle="validator"  id="form" name="form" action="<?=base_url()?>index.php/empresas/guardar" method="POST">  
					<div class="col-md-12 form-group">
							<label for="antecedentes">Nombre de la empresa</label>
							<input class="form-control" type="text" size="20" name="nombre_empresa" id="nombre_empresa" placeholder="Nombre de la empresa" required>				    
					</div><!--/ col -->	
					<div class="col-md-12 form-group">				    
				    <label for="giro_empresa">GIRO DE LA EMPRESA</label>
				      <input class="form-control" type="text" size="20" name="giro_empresa" id="giro_empresa" placeholder="Ingresa Giro de Empresa" required>
				    </div><!--/ col -->
					<div class="col-md-12 form-group">	
				    <label for="antecedentes">ANTECEDENTES</label>
				      <input class="form-control"type="text" size="20" name="antecedentes" id="antecedentes" placeholder="Antecedentes" required>
				     </div><!--/ col -->
					 <div class="col-md-12 form-group">
					<label for="mision">MISIÓN</label>
				      <input class="form-control" type="text" size="20" name="mision" id="mision" placeholder="Misión" required>
				     </div><!--/ col -->
					 <div class="col-md-12 form-group">
				    <label for="valores">VALORES</label>
				      <input class="form-control" type="text" size="30" name="valores" id="valores" placeholder="Ingresa los Valores" required>
				     </div><!--/ col -->
					<div class="col-md-12 form-group">
				    <label for="servicios_productos">SERVICIOS/PRODUCTOS</label>
				      <input class="form-control" type="text" size="20" name="servicios_productos" id="servicios_productos" placeholder="Ingresa los servicios" required>
				     </div><!--/ col -->
					<div class="col-md-12 form-group">
				    <label for="diferenciador">DIFERENCIADOR</label>
				      <input class="form-control" type="text" size="100" name="diferenciador" id="diferenciador" placeholder="Ingresa un identificador" required>
					 </div><!--/ col -->
				      <p><input class="btn btn-primary" type="submit" name="guardar" id"guadar" value="Guardar Datos" /></p>
  				</div>
				</form>
			</div>
        </div>
  	</div>
<?=$this->load->view('empresas/pie_pagina');?>