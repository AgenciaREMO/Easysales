<?=$this->load->view('empresas/menu');?>
	<div class="container">
			<h1>Editar Brief Diseño Gráfico</h1>
		</div><!-- container-->
<div class="container">
		<div class="row">
			<div class="col-md-12">    
				<form  id="form" name="form" action="<?=base_url()?>index.php/dg/editarparametros/<?=$id_dg?>" method="POST">  
					<div class="col-md-12 form-group">
			    	  <label for="desc_proyecto">Descripción del proyecto</label>
				      <input class="form-control" type="text" size="20" name="desc_proyecto" id="desc_proyecto" value="<?=$desc_proyecto?>" placeholder="Antecedentes">
				   	</div><!--/ col -->	     
				    <p><input type="submit" name="editar" id"editar" value="Editar Datos" /></p>
  				</div>
				</form>
		</div>
</div>