<?= form_open('perfil/update', array('class'=>'form-horizontal')); ?>
						<legend>Actualizar Registro</legend>

						<?= my_validation_errors(validation_errors()); ?>  <!--Aqui puse my_validation para poder personalizarlos en helper-->

						<div class="control-group">
								<?= form_label('ID', 'id', array('class'=>'control-label')); ?> 
								<span class ="uneditable-input"> <?= $registro->id; ?> </span>
								<?= form_hidden('id',$registro->id); ?>
						</div>

						<div class="control-group">
								<?= form_label('Nombre', 'nombre', array('class'=>'control-label')); ?> 
								<?= form_input(array('type'=>'nombre', 'name'=>'nombre', 'id'=>'nombre', 'value'=>$registro->nombre)); ?>
						</div>

						<div class="control-group">
								<?= form_label('Creado', 'creado', array('class'=>'control-label')); ?> 
								<span class ="uneditable-input"><?= $registro->creado; ?> </span>
								<?= form_hidden('creado',$registro->creado); ?>
						</div>
						
						<div class="control-group">
								<?= form_label('Modificado', 'modificado', array('class'=>'control-label')); ?> 
								<span class ="uneditable-input"><?= $registro->modificado; ?> </span>
								<?= form_hidden('modificado',$registro->modificado);?>
						</div>
						
						<div class="form-actions">
								<?= form_button(array('type'=>'submit', 'content'=>'Aceptar', 'class'=>'btn btn-primary')); ?>
								<?= anchor('perfil/index', 'Cancelar', array('class'=>'btn')); ?>
						</div>
					<?= form_close(); ?>