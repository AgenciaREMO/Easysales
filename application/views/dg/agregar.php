<?=$this->load->view('empresas/menu');?>
<?php
		$Tipo_Brief=1;
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
			<legend>AGREGAR BRIEF DISEÑO GRÁFICO</legend>			
				<form  id="form" name="form" action="<?=base_url()?>index.php/dg/guardar" method="POST">  
				    <br>
					<input type="hidden" size="20" name="Tipo_Brief" id="Tipo_Brief" value="<?=$Tipo_Brief?>">
					<br>
				    <input type="hidden" size="20" name="id_proyect" id="id_pro" value="<?=$id_proyecto?>"placeholder="Ingresa Nombre de Empresa">				
					<br>
				    <label for="desc_proyecto">DESCRIPCIÓN DEL PROYECTO</label>
				      <input class="form-control" type="text" size="20" name="desc_proyecto" id="desc_proyecto" placeholder="Ingrese la descripción del proyecto">
				    <br>
				      <p><input type="submit" name="guaradar" id"guardar" value="Guardar Datos" /></p>
  			</div>
				</form>
		</div>
     </div>
<?=$this->load->view('empresas/pie_pagina');?>