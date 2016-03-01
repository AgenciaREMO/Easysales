<div class="page-header">
	<h1> Perfiles</h1>
	<hr>
    <p> Aqui puedes ver los perfiles de los usuarios registrados................</p>
	<?= form_open('perfil/search', array('class'=>'form-search'));?>
	<?= form_input(array('type'=>'text', 'name'=>'buscar', 'id'=>'buscar', 'placeholder'=>'Buscar por nombre...','class'=>'input-medium search-query'));?>
	<?= form_button(array('type'=>'submit', 'content'=>'<i class="icon-search"></i>', 'class'=>'btn')); ?>
    <?= anchor('perfil/create', 'Agregar', array('class'=>'btn btn-primary')); ?>

	
	<?= form_close(); ?>
	
	<table class="table table-condensed table-bordered">
	<thead>
		<tr>
			<th> ID</th>
			<th> Nombre</th>
			<th> Creado</th>
			<th>Modificado</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($query as $registro): ?>
	<tr>
			<td><?= anchor('perfil/edit/'.$registro-> id, $registro->id); ?></td>  <!--aqui se le agrega un link para seleccionar-->
			<!--<td><?= $registro-> id?></td>-->
			<td><?= $registro-> nombre?></td>
			<td><?= $registro-> creado ?></td>
			<td><?= $registro-> modificado ?></td>
			<!--<td> date("d/m/y -H:i", strtotime($registro-> modificado)); ?></td>-->
		</tr>
		<?php endforeach; ?>
	
	</tbody>
</div>
