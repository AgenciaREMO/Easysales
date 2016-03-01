<?php	
		$Tipo_Brief=2;
		/*
			1.-D_G
			2.-D_W
			3.-Fotografía
			4.-Video
		*/
	?>
<?=$this->load->view('empresas/menu');?>
     <div class="container">
		<div class="row">
			<div class="col-md-12">  
			<br>
			<br>
			<legend>AGREGAR BRIEF WEB</legend>			
				<form  id="form" name="form" action="<?=base_url()?>index.php/web/guardar" method="POST">  
				      <input type="hidden" size="20" name="id_proyecto" id="id_proyecto" value="<?=$id_proyecto?>" >
					<div class="col-md-6 form-group">
			    	<label for="nombre_dominio">Nombre del dominio</label>
				      <input class="form-control" type="text" size="20" name="nombre_dominio" id="nombre_dominio" placeholder="Ingresa nombre del dominio">
				    </div><!--/ col -->		
				    <input type="hidden" size="20" name="Tipo_Brief" id="Tipo_Brief" value="<?=$Tipo_Brief?>">
					<div class="col-md-6 form-group">
				    <label for="hosting">Nombre del hosting</label>
				      <input class="form-control" type="text" size="20" name="hosting" id="hosting" placeholder="Ingresa nombre del hosting">
					</div><!--/ col -->		
				    <div class="col-md-12 form-group">
				    <label for="desc_proyecto">Descripción del proyecto</label>
				      <input class="form-control" type="text" size="20" name="desc_proyecto" id="desc_proyecto" placeholder="Ingresa la descripción del proyecto">
				    </div><!--/ col -->		
				      <p><input type="submit" name="guaradar" id"guardar" value="Guardar Datos" /></p>
  			</div>
				</form>
		</div>
     </div>
<?=$this->load->view('empresas/pie_pagina');?>