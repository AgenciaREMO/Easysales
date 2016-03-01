<?=$this->load->view('empresas/menu');?>
	<div class="container">
			<h1>Editar Brief Video</h1>
		</div><!-- container-->

<div class="container">
		<div class="row">
			<div class="col-md-12">    
				<form  id="form" name="form" action="<?=base_url()?>index.php/video/editarparametros/<?=$id_video?>" method="POST">  
					<div class="col-md-6 form-group">
			    	<label for="nombre_dominio">Duracion</label>
				      <input class="form-control" type="text" size="20" name="duracion" id="duracion" value="<?=$duracion?>"placeholder="Ingresa Nombre de Empresa">
				    </div><!--/ col -->	
				    <div class="col-md-6 form-group">
				    <label for="referencia">Referencia</label>
				      <input class="form-control" type="text" size="20" name="referencia" id="referencia" value="<?=$referencia?>" placeholder="Ingresa Giro de Empresa">
				    </div><!--/ col -->	
				    <div class="col-md-6 form-group">
				    <label for="material">Material</label>
				      <input class="form-control" type="text" size="20" name="material" id="material" value="<?=$material?>" placeholder="Antecedentes">
					</div><!--/ col -->	
					<div class="col-md-6 form-group">
					<label for="dcanal_distribucion">Canal de distribución</label>
				      <input class="form-control" type="text" size="20" name="canal_distribucion" id="canal_distribucion" value="<?=$canal_distribucion?>" placeholder="Antecedentes">
					 </div><!--/ col -->	
					 <div class="col-md-12 form-group">
					 <label for="desc_proyecto">Descipción del proyecto</label>
				      <input class="form-control" type="text" size="20" name="desc_proyecto" id="desc_proyecto" value="<?=$desc_proyecto?>" placeholder="Antecedentes">
				   	</div><!--/ col -->	    
				    <p><input type="submit" name="editar" id"editar" value="Editar Datos" /></p>
  			</div>
				</form>
		</div>
</div>
