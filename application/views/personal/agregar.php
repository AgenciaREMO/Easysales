<html lang="es">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet" media="screen">
		<link href="<?= base_url('css/modern-business.css') ?>" rel="stylesheet">
		<link href="<?= base_url('font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
		<title>REMO | PERSONAL </title>
	</head>
<?=$this->load->view('empresas/menu');?>
     <div class="container">
		<div class="row">
			<div class="col-md-12">    
	    	<h3>AGREGAR PERSONAL</h3>
				<form  id="form" name="form" action="<?=base_url()?>index.php/personal/guardar" method="POST">  
				    <div class="col-md-12 form-group">
							<label for="antecedentes">Nombre del Cliente</label>
							<input class="form-control" type="text" size="20" name="nombre" id="nombre" placeholder="Nombre del Personal" required>				    
					</div>
					<div class="col-md-4 form-group">
							<label for="valores">Teléfono</label>
							<input class="form-control" type="text" size="30" name="telefono" id="telefono" placeholder="Teléfono" required>
				    </div><!--/ col -->
					<div class="col-md-4 form-group">
							<label for="servicios_productos">Celular</label>
							<input class="form-control" type="text" size="20" name="celular" id="celular" placeholder="Celular" required>
					 </div><!--/ col -->
					<div class="col-md-4 form-group">
				    <label for="diferenciador">email</label>
				      <input class="form-control" type="text" size="20" name="email" id="email" placeholder="email" required>
					</div><!--/ col -->
					<div class="col-md-4 form-group">
				    <label for="diferenciador">Especialización</label>
				      <input class="form-control" type="text" size="20" name="especializacion" id="especializacion" placeholder="Especialización" required>
					</div><!--/ col -->
					<div class="col-md-4 form-group">
					<label for="diferenciador">Puesto</label>
				      <input class="form-control" type="text" size="20" name="puesto" id="puesto" placeholder="Puesto" required>
					</div><!--/ col -->
			    	<div class="col-md-4 form-group">
						<br>
						<br>
						<br>
				      <p><input class="btn btn-primary" type="submit" name="editar" id"editar" value="Agregar Datos" /></p>
					</div><!--/ col -->
				</form>
			</div>
        </div>
  	</div>
	<?=$this->load->view('empresas/pie_pagina');?>