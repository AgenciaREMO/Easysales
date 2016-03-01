<!DOCTYPE html>
<html lang="es">
<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet" media="screen">
		<link href="<?= base_url('css/modern-business.css') ?>" rel="stylesheet">
		<link href="<?= base_url('font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
		<title>REMO | WEB </title>
</head>
<?=$this->load->view('empresas/menu');?>	
<body>
	<div class="container">
			<h3>BRIEF WEB</h3>
	</div><!-- container-->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<table>
				<tr>
				</tr>
					<?php
					if($enlaces != FALSE){
						foreach ($enlaces -> result() as $row) {
							$nom=$row->nombre_dominio;
							$hos=$row->hosting;
							$desc=$row->desc_proyecto;
							?>
							<div class="container">
								<div class="row">
										<div class="col-md-12">
											<p>															
											NOMBRE DEL DOMINIO: <?php echo $nom; ?>
											<br/>
											NOMBRE DEL HOSTING:	<?php echo $hos; ?>
											<br/>
											DESCRIPCIÓN DEL PROYECTO: <?php echo $desc; ?>
											
										</p>
										</div>
								</div>
							</div>
							<?php
							echo '
							<div class="col-md-4 col-md-offset-4">
																	<div class="btn-group btn-group-justified" role="group" aria-label="">
																	
																		<a class="btn btn-primary" href="'.base_url().'index.php/web/editar/'.$row->id_web.'">
																			
																			<span class="glyphicon glyphicon-edit">
																			</span>
																				Editar
																			</a><a class="btn btn-danger" href="'.base_url().'index.php/web/eliminar/'.$row->id_web.'">
																			<span class="glyphicon glyphicon-remove">
																			</span>
																				Eliminar
																			</a>
																	</div>
							</div>';	?>
					<?php		
							
											
						}
					} else {
						 echo "No Existen Registros";
					}
					?>
						
				</table>
			</div>
		</div>
	</div>
<?=$this->load->view('empresas/pie_pagina');?>
</body>

