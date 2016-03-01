<?=$this->load->view('empresas/menu');?>

	<?php
		$Tipo_Brief=4;
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
			<legend>AGREGAR BRIEF VIDEO</legend>			
				<form  id="form" name="form" action="<?=base_url()?>index.php/video/guardar" method="POST">  
				      <input class="form-control" type="hidden" size="20" name="id_proyecto" id="id_proyecto" value="<?=$id_proyecto?>" >
					<div class="col-md-6 form-group">
			    		<label for="duracion">DURACIÓN</label>
				      	<input class="form-control" type="text" size="20" name="duracion" id="duracion" placeholder="Ingresa la duración del video" required>
				    </div><!--/ col -->	
					<input class="form-control" type="hidden" size="20" name="Tipo_Brief" id="Tipo_Brief" value="<?=$Tipo_Brief?>">
					<div class="col-md-6 form-group">
				    <label for="referencia">REFERENCIA</label>
				      <input class="form-control" type="text" size="20" name="referencia" id="referencia" placeholder="Ingresa la referencia del video" required>
					</div><!--/ col -->	
					<div class="col-md-6 form-group">
				    <label for="material">MATERIAL</label>
				      <input class="form-control" type="text" size="20" name="material" id="material" placeholder="Ingresa el material del video" required>
				    </div><!--/ col -->	
				    <div class="col-md-6 form-group">
					<label for="material">CANAL DE DISTRIBUCIÓN</label>
				      <input class="form-control" type="text" size="20" name="canal_distribucion" id="canal_distribucion" placeholder="Ingresa el canal de distribución" required>
				     </div><!--/ col -->	
				    <div class="col-md-12 form-group">
				    <label for="desc_proyecto">DESCRIPCIÓN DEL PROYECTO</label>
				      <input class="form-control" type="text" size="20" name="desc_proyecto" id="desc_proyecto" placeholder="Ingresa la descripción del proyecto" required>
				    </div><!--/ col -->	
				      <p><input type="submit" name="guaradar" id"guaRdar" value="Guardar Datos" /></p>
  			</div>
				</form>
		</div>
     </div>
<?=$this->load->view('empresas/pie_pagina');?>