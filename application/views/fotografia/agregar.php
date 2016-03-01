<?=$this->load->view('empresas/menu');?>
<?php
		$Tipo_Brief=3;
		/*
			1.-D_G
			2.-D_W
			3.-Fotografía
			4.-Video
		*/
	?>
     <div class="container">
		<div class="row">
			<div class="col-md-12">  
			<br>
			<br>
			<legend>AGREGAR BRIEF FOTOGRAFÍA</legend>			
				<form  id="form" name="form" action="<?=base_url()?>index.php/fotografia/guardar" method="POST">  
					<input type="hidden" size="20" name="id_proyecto" id="id_proyecto" value="<?=$id_proyecto?>" placeholder="Ingresa Nombre de Empresa">
					<input type="hidden" size="20" name="Tipo_Brief" id="Tipo_Brief" value="<?=$Tipo_Brief?>">
					<div class="col-md-6 form-group">
			    	<label for="tipo_foto">TIPO DE FOTOGRAFÍA</label>
				      <input class="form-control" type="text" size="20" name="tipo_foto" id="tipo_foto" placeholder="Ingresa el tipo de fotografía" required>
					</div><!--/ col -->	
				    <div class="col-md-6 form-group">
				    <label for="lugar_sesion">LUGAR DE LA SESIÓN</label>
				      <input class="form-control" type="text" size="20" name="lugar_sesion" id="lugar_sesion" placeholder="Ingresa el lugar de sesión" required>
				    </div><!--/ col -->	
				    <div class="col-md-12 form-group">
				    <label for="desc_proyecto">DESCRIPCIÖN DEL PROYECTO</label>
				      <input  class="form-control" type="text" size="20" name="desc_proyecto" id="desc_proyecto" placeholder="Ingresa la descripción del proyecto" required>
				    </div><!--/ col -->	
				      <p><input type="submit" name="guaradar" id"guasskkkrdar" value="Guardar Datos" /></p>
  			</div>
				</form>
		</div>
     </div>
<?=$this->load->view('empresas/pie_pagina');?>