<?=$this->load->view('empresas/menu');?>
	<div class="container">
			<h1>Editar Brief Web</h1>
		</div><!-- container-->
<div class="container">
		<div class="row">
			<div class="col-md-12">    
				<form  id="form" name="form" action="<?=base_url()?>index.php/web/editarparametros/<?=$id_web?>" method="POST">  
			    	<div class="col-md-6 form-group">
					<label for="nombre_dominio">Nombre del dominio</label>
				      <input class="form-control" type="text" size="20" name="nombre_dominio" id="nombre_dominio" value="<?=$nombre_dominio?>"/>
				    </div><!--/ col -->	
					<div class="col-md-6 form-group">
				    <label for="hosting">Hosting</label>
				      <input class="form-control" type="text" size="20" name="hosting" id="hosting" value="<?=$hosting?>"/>
				    </div><!--/ col -->	
					<div class="col-md-12 form-group">
				    <label for="desc_proyecto">Descripción del proyecto</label>
				      <input class="form-control" type="text" size="20" name="desc_proyecto" id="desc_proyecto" value="<?=$desc_proyecto?>"/>
				   	</div><!--/ col -->	    
				    <p><input type="submit" name="editar" id="editar" value="Editar Datos"/></p>
  				</div>
				</form>
		</div>
</div>
