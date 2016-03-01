<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet" media="screen">
		<link href="<?= base_url('css/modern-business.css') ?>" rel="stylesheet">
		<link href="<?= base_url('font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
		<title> REMO | EMPRESAS </title>
	</head>
<?=$this->load->view('empresas/menu');?>
	
<div class="container">
			<h1>EMPRESAS</h1>
			<?php  require("mensaje.php"); //Gestor de mensajes?>
		</div><!-- container-->
<div class="form-actions">
	<!--<a href="http://localhost/Prueba/index.php/empresas/agregar" class="btn btn-primary" role="button">Nueva Empresa</a>-->
</div>

<table>
	<tr>
		
	</tr>
		<?php
		if($enlaces != FALSE){
			//echo "NOMBRE DE LA EMPRESA     GIRO DE LA EMPRESA ANTECEDENTES MISIÓN VISIÓN VALORES SERVICIOS/PRODUCTOS DIFERENCIADOR";
			foreach ($enlaces -> result() as $row) {
				/*echo "<tr>";
				echo "<td>".$row->nombre_empresa."</td>";
				echo "<td>".$row->giro_empresa."</td>";
				echo "<td>".$row->antecedentes."</td>";
				echo "<td>".$row->mision."</td>";
				echo "<td>".$row->vision."</td>";
				echo "<td>".$row->valores."</td>";
				echo "<td>".$row->servicios_productos."</td>";
				echo "<td>".$row->diferenciador."</td>";*/
				$nom_em=$row->nombre_empresa;
				$giro_e=$row->giro_empresa;
				$ant=$row->antecedentes;
				$mis=$row->mision;
				$val=$row->valores;
				$ser_prod=$row->servicios_productos;
				$dif=$row->diferenciador;
				
				
				//echo "<td><a href=".base_url()."index.php/empresas/editar/".$row->id_empresa.">EDITAR</a> | "; 
				//echo "<a href=".base_url()."index.php/empresas/eliminar/".$row->id_empresa.">ELIMINAR</a></td>";  //Esta es la URL Que se pasa
				//echo "</tr>";
				?>
				<div class="container">
					<div class="row">
							<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $row->id_empresa; ?>">
									<h4>
									<?php echo $nom_em; ?>
									</h4>
									</a>
							</div><!--/ col panel heading-->
						</div><!--/ col panel panel default-->
						<div id="<?php echo $row->id_empresa; ?>" class="panel-collapse collapse">
							<div class="panel-body">
									<!-----Codigo--->
									<div class="row">
										<div class="col-md-9">
											<p>GIRO DE LA EMPRESA:<?php echo $giro_e; ?><p>
											<p>ANTECEDENTES:<?php echo $ant; ?><p>
											<p>MISIÓN:<?php echo $mis; ?><p>
											<p>VALORES:<?php echo $val; ?><p>		
											<p>SERVICIOS/PRODUCTOS:<?php echo $ser_prod; ?><p>
											<p>DIFERENCIADOR:<?php echo $dif; ?><p>
											
										</div>
										<div class="col-md-1">
												<?php
												echo "<a class='btn btn-primary' href=".base_url()."index.php/empresas/editar/".$row->id_empresa.">
												<span class='glyphicon glyphicon-edit'>
												</span>
													Editar

												</a>"; 
												echo "<a class='btn btn-danger' href=".base_url()."index.php/empresas/eliminar/".$row->id_empresa.">
												<span class='glyphicon glyphicon-remove'>
												</span>
												Eliminar</a>";


												?>
												
												
									
								</div>
							</div><!--Panel Body -->
						</div><!--de id_proyecto -->
					</div><!--Col-md -->
				<div class="col-md-1">
				</div>
				</div><!--row -->
				
				<?php		
			}
		} else {
			 echo "No Existen Registros";
		}
		?>
</table>
</body>
<div class="row">
	<div class="col-md-9">	
	</div>
		<div class="col-md-3">			
		<a href="http://remo.mx/easysales/index.php/empresas/agregar" class="btn btn-primary" role="button"> 
		<span class="glyphicon glyphicon-plus">	</span>Agregar Nuevo
		
		</a>
	</div>
</div>
<?=$this->load->view('empresas/pie_pagina');?>

