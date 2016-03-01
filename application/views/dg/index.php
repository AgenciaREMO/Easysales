<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet" media="screen">
		<link href="<?= base_url('css/modern-business.css') ?>" rel="stylesheet">
		<link href="<?= base_url('font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
		<title>REMO | VIDEO </title>
	</head>
<?=$this->load->view('empresas/menu');?>	
<body>
	<div class="container">
			<h3>BRIEF DISEÑO GRÁFICO</h3>
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
							
							$des=$row->desc_proyecto;
						?>
							<div class="container">
								<div class="row">
										<div class="col-md-12">
											<p>															
											DESCRIPCIÓN DEL PROYECTO: <?php echo $des; ?>
										</p>
										</div>
								</div>
							</div>
							<?php
							echo '
							<div class="col-md-4 col-md-offset-4">
																	<div class="btn-group btn-group-justified" role="group" aria-label="">
																	
																		<a class="btn btn-primary" href="'.base_url().'index.php/dg/editar/'.$row->id_dg.'">
																			
																			<span class="glyphicon glyphicon-edit">
																			</span>
																				Editar
																			</a><a class="btn btn-danger" href="'.base_url().'index.php/dg/eliminar/'.$row->id_dg.'">
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

