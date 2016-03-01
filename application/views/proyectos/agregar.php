<head>
<link rel="stylesheet" type="text/css" media="screen"
href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
<!-- ... -->  
<script type="text/javascript" src="/bower_components/jquery/jquery.min.js"></script>
<script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>
<script type="text/javascript" src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
</head>
<?=$this->load->view('empresas/menu');?>
<link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet" media="screen">
<link href="<?= base_url('css/modern-business.css') ?>" rel="stylesheet">
<link href="<?= base_url('font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
<div class="container">
	<div class="row">	    	
	   	<div class="col-md-12">
	    	<h1>Agregar proyectos</h1>
				<form role="form" action="<?=base_url()?>index.php/proyectos/guardar" method="post" enctype="multipart/form-data">
					<div class="col-md-12 form-group">
							<label for="nombre_proy">Nombre del proyecto</label>
							<input class="form-control" type="text" size="20" name="nombre" id="nombre" placeholder="Nombre del proyecto" required>				    
					</div><!--/ col -->	
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
											echo "<option value=".$row->id_cliente.">".$row->nombre."</option>";	
											}
										} else {
												echo "<option value=''>No existen registros</option>";
										}
								?>
							  							
							</select>
						</div>
						<div class="col-md-4 form-group">
							<label>
								L&iacute;der de proyecto<!--Personal-->
							</label>
							<select class="form-control" name="id_personales" ><option value="">Selecciona una opci&oacute;n</option>
								<?php 
								  if($nom_persnonal != FALSE){
								      foreach ($nom_persnonal -> result() as $row) {
									    echo "<option value=".$row->id_personal.">".$row->nombre."</option>";	
											}
									} else {
											echo "<option value=''>No existen registros</option>";
										}
								?>
							</select>					
						</div><!--/ col -->						
						<div class="col-md-6 form-group hidden">
							<label for="nombre_empresa">Id cliente</label>
						  	<input class="form-control" type="text" Name="id_cliente" id="id_cliente" placeholder="Ingresa Nombre de Empresa">	
						</div><!--/ col -->						
						<div class="col-md-6 form-group hidden">
							<label for="giro_empresa">Id personal</label>
							<input class="form-control" type="text" name="id_personal" id="id_personal" placeholder="">
						</div><!--/ col -->											
						<div class="col-md-4 form-group">
							<label for="mision">Depto responsable</label>
						  	<input class="form-control" type="text" name="depto_responsable" id="depto_responsable" placeholder="Depto responsable">
						</div><!--/ col -->		
						<div class="col-md-12 form-group">
							<label for="alcance">Objetivo</label>
						  	<input class="form-control" type="text" name="objetivo" id="objetivo" placeholder="objetivo">
						</div><!--/ col -->	
						<div class="col-md-12 form-group">
							<label for="alcance">Alcance</label>
						  	<input class="form-control" type="text" name="alcance" id="alcance" placeholder="Alcance">
						</div><!--/ col -->						
						<div class="col-md-12 form-group">
							 <label for="alcance">Antecedentes</label>
						  	<input class="form-control" type="text" name="antecedentes" id="antecedentes" placeholder="Antecedentes ">
						</div><!--/ col -->		
						<div class="col-md-3 form-group">
							<label for="alcance">Fecha de inicio</label>
						  	<input class="form-control" type="text" name="f_inicio" id="f_inicio" value="" placeholder="Fecha de inicio">
						</div><!--/ col -->		
						<div class="col-md-3 form-group">
							<label for="alcance">Fecha de termino</label>
						  	<input class="form-control" type="text" name="f_termino" id="f_termino" value="" placeholder="Fecha de termino" >
						</div><!--/ col -->		
						<div class="col-md-2 form-group">
							<label for="diferenciador">Resultado estatus</label>
							<select class="form-control" name="estatus" ><option value="">Selecciona una opcion</option>
									<option value= 1 >Prospección</option>
									<option value= 2 >Oportunidad</option>
							</select>
							<br/>
							<input class="btn btn-primary" type="submit" name="guardar" id"guardar" value="Guardar datos" />
						</div>
					</form><!--/form -->
				</div>
			</div>
        </div>