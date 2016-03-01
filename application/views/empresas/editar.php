<html lang="es">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet" media="screen">
		<link href="<?= base_url('css/modern-business.css') ?>" rel="stylesheet">
		<link href="<?= base_url('font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
		<title>REMO | EMPRESA </title>
	</head>
<?=$this->load->view('empresas/menu');?>
<legend></legend>
     <div class="container">
		<div class="row">
			<div class="col-md-12">    
	    	<h3>EDITAR EMPRESA</h3>
				<form  id="form" name="form" action="<?=base_url()?>index.php/empresas/editarparametros/<?=$id_empresa?>" method="POST">  
					<form>
					<div class="col-md-12 form-group">
						<label for="nombre_empresa">NOMBRE DE LA EMPRESA</label>
				        <input class="form-control" type="text" size="20" name="nombre_empresa" id="nombre_empresa" value="<?=$nombre_empresa?>"placeholder="Ingresa Nombre de Empresa">
				    </div><!--/ col -->	
					<div class="col-md-12 form-group">
						<label for="giro_empresa">GIRO DE LA EMPRESA</label>
						<input class="form-control" type="text" size="20" name="giro_empresa" id="giro_empresa" value="<?=$giro_empresa?>" placeholder="Ingresa Giro de Empresa">
				    </div><!--/ col -->	
					<div class="col-md-12 form-group">
						<label for="antecedentes">ANTECEDENTES</label>
						<input class="form-control" type="text" size="20" name="antecedentes" id="antecedentes" value="<?=$antecedentes?>" placeholder="Antecedentes">
				    </div><!--/ col -->	
					<div class="col-md-12 form-group">
						<label for="mision">MISIÓN</label>
						<input class="form-control" type="text" size="20" name="mision" id="mision" value="<?=$mision?>" placeholder="Misión">
				    </div><!--/ col -->	
					<div class="col-md-12 form-group">
				    <label for="valores">VALORES</label>
				      <input class="form-control" type="text" size="30" name="valores" id="valores" value="<?=$valores?>"placeholder="Ingresa los Valores">
				    </div><!--/ col -->	
					<div class="col-md-12 form-group">
				    <label for="servicios_productos">SERVICIOS/PRODUCTOS</label>
				      <input class="form-control" type="text" size="20" name="servicios_productos" id="servicios_productos" value="<?=$servicios_productos?>" placeholder="Ingresa los servicios ">
				    </div><!--/ col -->	
					<div class="col-md-12 form-group">
				    <label for="diferenciador">DIFERENCIADOR</label> 
				      <input class="form-control" type="text" size="20" name="diferenciador" id="diferenciador" value="<?=$servicios_productos?>" placeholder="Ingresa un identificador">
				    </div><!--/ col -->	  
					<p><input class="btn btn-primary" type="submit" name="editar" id"editar" value="Editar Datos" /></p>
  				</div>
				</form>
			</div>
        </div>
  	</div>
<?=$this->load->view('empresas/pie_pagina');?>
	