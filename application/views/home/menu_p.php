<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ingreso</title>

</head>
<body>
	<nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>
              <li><a href="../navbar-static-top/">Static top</a></li>
              <li><a href="../navbar-fixed-top/">Fixed top</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>










	
		<div class="container">
	<div class="row">
			<div class="col-md-offset-3 col-md-6">
            	<br>
            	<br>
            	<br>
            	<br>
            	<br>					
					  <?= form_open('home/cambiar_clave', array('class'=>'form-horizontal')); ?>
					  <legend> Cambiar contraseña de usuario </legend>
					  <br>
					  <?= my_validation_errors(validation_errors()); ?>

					  <div class="control-group">
					   <?= form_label('Contraseña actual:', 'clave_act', array('class'=>'control-label')); ?>
					   <?= form_input(array('type'=>'password', 'name'=>'clave_act', 'id'=>'clave_act', 'value'=>set_value('clave_act'))); ?>
					  </div>

					  <div class="control-group">
					   <?= form_label('Contraseña nueva', 'clave_new', array('class'=>'control-label')); ?>
					   <?= form_input(array('type'=>'password', 'name'=>'clave_new', 'id'=>'clave_new', 'value'=>set_value('clave_new'))); ?>
					  </div>

					  <div class="control-group">
					   <?= form_label('Repetir la contraseña nueva', 'clave_rep', array('class'=>'control-label')); ?>
					   <?= form_input(array('type'=>'password', 'name'=>'clave_rep', 'id'=>'clave_rep', 'value'=>set_value('clave_rep'))); ?>
					  </div>
					  <br>
					  <br>
					  <div class="form-actions">
					   <?= form_button(array('type'=>'submit', 'content'=>'Confirmar', 'class'=>'btn btn-primary')); ?>
					   <?= anchor('home/index', 'Cancelar', array('class'=>'btn')); ?>
					  </div>
					 <?= form_close(); ?>

		</div> <!--Col-->
	</div> <!--row-->
 </div> <!--Container-->
</body>
</html>