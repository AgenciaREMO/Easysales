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
			<h3>BRIEF VIDEO</h3>
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
						//echo "<td>".$row->duracion."</td>";
						//echo "<td>".$row->referencia."</td>";    
						//echo "<td>".$row->material."</td>";
						//echo "<td>".$row->canal_distribucion."</td>";
						//echo "<td>".$row->desc_proyecto."</td>";
						
						$duracion=$row->duracion;
						$ref=$row->referencia;
						$mat=$row->material;
						$can=$row->canal_distribucion;
						$des=$row->desc_proyecto;
						?>
										<p>															
										DURACIÓN: <?php echo $duracion; ?>
										<br/>
										REFERENCIA:	<?php echo $ref; ?>
										<br/>
										MATERIAL: <?php echo $mat; ?>
										<br/>
										CANAL DE DISTRIBUCIÓN: <?php echo $can; ?>
										<br/>
										DESCRIPCIÓN DE PROYECTO: <?php echo $des; ?>
										
									</p>
							
						
						<?php
						echo '
															<hr/>
															<div class="col-md-4 col-md-offset-4">
																<div class="btn-group btn-group-justified" role="group" aria-label="">
																
																	<a class="btn btn-primary" href="'.base_url().'index.php/video/editar/'.$row->id_video.'">
																		
																		<span class="glyphicon glyphicon-edit">
																		</span>
																			Editar
																		</a><a class="btn btn-danger" href="'.base_url().'index.php/video/eliminar/'.$row->id_video.'">
																		<span class="glyphicon glyphicon-remove">
																		</span>
																			Eliminar
																		</a>
																</div>
															
															</div>
															
															
														';	
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

