<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet" media="screen">
		<link href="<?= base_url('css/modern-business.css') ?>" rel="stylesheet">
		<link href="<?= base_url('font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
		<title> REMO | CLIENTES </title>
	</head>
<body>
<?=$this->load->view('empresas/menu');?>
	<div class="container">
		<br/>	
			<h1>
				CLIENTES
			</h1>
			<?php  require("mensaje.php"); //Gestor de mensajes?>
		<section class="row">	
		<?php
		if($enlaces != FALSE){
			foreach ($enlaces -> result() as $row) {
				echo "<tr>";
				$nom=$row->nombre;
				$puesto=$row->puesto;
				$idemp=$row->id_empresa;
				$tc=$row->tipo_cliente;
				$tel=$row->telefono;
				$cel=$row->celular;
				$em=$row->email;
				$nom_em=$row->nombre_empresa;	
				?>
				<div class="col-md-4">
					<div class="panel panel-default">
					  <div class="panel-heading">
					  	<h4>
					  		<?php echo $nom; ?>
					  		<br/>
					  		<small>
					  			<span class="glyphicon glyphicon-tag" aria-hidden="true"></span> <?php echo $puesto; ?>
					  		</small>	
					  	</h4>				  	
					  </div>
					  <div class="panel-body">
					    	<p>
							<?php echo $nom_em; ?>
							<br/>
							<br/>
							<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> <?php echo $tel; ?>
							<br/>
							<span class="glyphicon glyphicon-phone" aria-hidden="true"></span> <?php echo $cel; ?>
							<br/>
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <?php echo $em; ?>
						<p>
							<div class="btn-group btn-group-justified" role="group" aria-label="">
							<?php
								echo "<a class='btn btn-primary' href=".base_url()."index.php/clientes/editar/".$row->id_cliente.">
								<span class='glyphicon glyphicon-edit'>
								</span>
								Editar</a>"; 
								echo "<a class='btn btn-danger' href=".base_url()."index.php/clientes/eliminar/".$row->id_cliente.">
								<span class='glyphicon glyphicon-remove'>
								</span>
								Eliminar</a>";  //Esta es la URL Que se pasa
							?>
							</div>
					  </div>
					</div>
				</div>
				<?php
				/////////////////////////////////////
									
			}
		} else {
			 echo "No Existen Registros";
		}
		?>
</table>	
<div class="row">
	<div class="col-md-9">	
	</div>
		<div class="col-md-3">			
		<a href="http://remo.mx/easysales/index.php/clientes/agregar" class="btn btn-primary" role="button">
		<span class="glyphicon glyphicon-plus">	</span>Agregar Nuevo
		</a>
	</div>
</div>
<?=$this->load->view('empresas/pie_pagina');?>
</body>
</html>
