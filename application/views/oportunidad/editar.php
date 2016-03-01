<div class="container">
		<div class="row">
			<div class="col-md-8">    
	    	<h3>Editar Proyecto</h3>
				<form  id="form" name="form" action="<?=base_url()?>index.php/proyectos/editarparametros/<?=$id_proyecto?>" method="POST">   //Aqui es deonde manda la liga
						<form>
			    	<label for="nombre_empresa">id_cliente</label>
				      <input type="text" size="20" name="id_cliente" id="id_cliente" value="<?=$id_cliente?>"placeholder="Ingresa Nombre de Empresa">
				    <br>
				    <label for="giro_empresa">id_personal</label>
				      <input type="text" size="20" name="id_personal" id="id_personal" value="<?=$id_personal?>" placeholder="Ingresa Giro de Empresa">
				    <br>
				    <label for="antecedentes">nombre</label>
				      <input type="text" size="20" name="nombre" id="nombre" value="<?=$nombre?>" placeholder="Antecedentes">
				    <br>
					<label for="mision">depto_responsable</label>
				      <input type="text" size="20" name="depto_responsable" id="depto_responsable" value="<?=$depto_responsable?>" placeholder="Misión">
				    <br>
				    <label for="alcance">alcance</label>
				      <input type="text" size="20" name="alcance" id="alcance" value="<?=$alcance?>" placeholder="Ingresa los servicios ">
					   <br>
				    <label for="alcance">antecedentes</label>
				      <input type="text" size="20" name="antecedentes" id="antecedentes" value="<?=$antecedentes?>" placeholder="Ingresa los servicios ">
					   <br>
				    <label for="alcance">f_inicio</label>
				      <input type="text" size="20" name="f_inicio" id="f_inicio" value="<?=$f_inicio?>" placeholder="Ingresa los servicios ">
					   <br>
				    <label for="alcance">f_termino</label>
				      <input type="text" size="20" name="f_termino" id="f_termino" value="<?=$f_termino?>" placeholder="Ingresa los servicios ">
					<br>
				    <label for="alcance">id_prospeccion</label>
				      <input type="text" size="20" name="id_prospeccion" id="id_prospeccion" value="<?=$id_prospeccion?>" placeholder="Ingresa los servicios ">
					  <br>
				    <label for="alcance">id_oportunidad</label>
				      <input type="text" size="20" name="id_oportunidad" id="id_oportunidad" value="<?=$id_oportunidad?>" placeholder="Ingresa los servicios ">
					  <br>
				    <label for="alcance">id_cierre</label>
				      <input type="text" size="20" name="id_cierre" id="id_cierre" value="<?=$id_cierre?>" placeholder="Ingresa los servicios ">
				    <br>
				    <label for="diferenciador">resultado_estatus</label>
				    <input type="text" size="20" name="resultado_estatus" id="resultado_estatus" value="<?=$resultado_estatus?>" placeholder="Ingresa un identificador">
				    <p><input type="submit" name="editar" id"editar" value="Editar Datos" /></p>
  				</div>
				</form>
			</div>
        </div>
  	</div>