<div class="container">
		<div class="row">
			<div class="col-md-8">    
	    	<h3>Agregar Proyectos</h3>
				<form  id="form" name="form" action="<?=base_url()?>index.php/oportunidad/guardar" method="POST">  
			    	<label for="nombre_empresa">id_cliente</label>
				      <input type="text" size="20" name="id_cliente" id="id_cliente" placeholder="Ingresa Nombre de Empresa">
				    <br>
				    <label for="giro_empresa">id_personal</label>
				      <input type="text" size="20" name="id_personal" id="id_personal" placeholder="Ingresa Giro de Empresa">
				    <br>
				    <label for="antecedentes">nombre</label>
				      <input type="text" size="20" name="nombre" id="nombre" placeholder="Antecedentes">
				    <br>
					<label for="mision">depto_responsable</label>
				      <input type="text" size="20" name="depto_responsable" id="depto_responsable" placeholder="Misión">
					<br>
					<label for="mision">objetivo</label>
				      <input type="text" size="20" name="objetivo" id="objetivo" placeholder="objetivo">
				    <br>
				    <label for="alcance">alcance</label>
				      <input type="text" size="20" name="alcance" id="alcance" placeholder="alcance">
				    <br>
				    <label for="antecedentes">antecedentes</label>
				      <input type="text" size="20" name="antecedentes" id="antecedentes" placeholder="antecedentes">
					 <br>
				    <label for="f_inicio">f_inicio</label>
				      <input type="text" size="20" name="f_inicio" id="f_inicio" placeholder="f_inicio">
					 <br>
				    <label for="f_termino">f_termino</label>
				      <input type="text" size="20" name="f_termino" id="f_termino" placeholder="f_termino">
					 <br>
				    <label for="id_prospeccion">id_prospeccion</label>
				      <input type="text" size="20" name="id_prospeccion" id="id_prospeccion" placeholder="id_prospeccion">
					 <br>
				    <label for="id_oportunidad">id_oportunidad</label>
				      <input type="text" size="20" name="id_oportunidad" id="id_oportunidad" placeholder="id_oportunidad">
					 <br>
				    <label for="id_cierre">id_cierre</label>
				      <input type="text" size="20" name="id_cierre" id="id_cierre" placeholder="id_cierre">
					 <br>
				    <label for="resultado_estatus">resultado_estatus</label>
				      <input type="text" size="20" name="resultado_estatus" id="resultado_estatus" placeholder="resultado_estatus">
					<br>
				      <p><input type="submit" name="guaradar" id"guasskkkrdar" value="Guardar Datos" /></p>
  				</div>
				</form>
			</div>
        </div>
  	</div>