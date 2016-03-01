<?=$this->load->view('empresas/menu');?>
	<div class="container">
			<h1>Editar Brief Fotografía</h1>
		</div><!-- container-->
<div class="container">
		<div class="row">
			<div class="col-md-12">    
				<form  id="form" name="form" action="<?=base_url()?>index.php/fotografia/editarparametros/<?=$id_foto?>" method="POST"> 
					<div class="col-md-6 form-group"> 
			    	<label for="tipo_foto">Tipo de foto</label>
				      <input class="form-control" type="text" size="20" name="tipo_foto" id="tipo_foto" value="<?=$tipo_foto?>"placeholder="Ingresa Nombre de Empresa">
				     </div><!--/ col -->	
				     <div class="col-md-6 form-group"> 
				    <label for="lugar_sesion">Lugar de sesion</label>
				      <input class="form-control" type="text" size="20" name="lugar_sesion" id="lugar_sesion" value="<?=$lugar_sesion?>" placeholder="Ingresa Giro de Empresa">
					 </div><!--/ col -->
					 <div class="col-md-12 form-group"> 
					 <label for="desc_proyecto">Descripción del proyecto</label>
				      <input class="form-control" type="text" size="20" name="desc_proyecto" id="desc_proyecto" value="<?=$desc_proyecto?>" placeholder="Antecedentes">
				   	 </div><!--/ col -->    
				    <p><input type="submit" name="editar" id"editar" value="Editar Datos" /></p>
  			</div>
				</form>
		</div>
</div>