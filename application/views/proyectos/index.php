<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet" media="screen">
		<link href="<?= base_url('css/modern-business.css') ?>" rel="stylesheet">
		<link href="<?= base_url('font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
		<title>REMO | PROYECTOS </title>
	</head>
	<?=$this->load->view('empresas/menu');?>	
	<body>
		
		<div class="container">
			<h1>PROYECTOS</h1>
			<?php  require("mensaje.php"); //Gestor de mensajes?>
		</div><!-- container-->
		<?php
		echo'<form name="mostrar" method="post" action="<?=base_url()?>index.php/dg/agregar">
	<table align="center" width="600">
	<tr>
	</tr>';	
		if($enlaces != FALSE){
			foreach ($enlaces -> result() as $row) {
				
				
				$id_tp=$row->id_proyecto;
				$N_Personal=$row->personalnom;
				$N_prog=$row->NomPro;
				$N_cliente=$row->NomCli;
				$res=$row->depto_responsable;
				$obj=$row->objetivo;
				$alc=$row->alcance;
				$ant=$row->antecedentes;
				$f_i=$row->f_inicio;
				$f_t=$row->f_termino;
				$sta=$row->resultado_estatus;
				$br=$row->brief;
				if($sta==1){
					$sa="Prospección";
				}else{
					$sa="Oportunidad";
				}
				 
				
				?>		
				
				
			
				<div class="container">
					<div class="row">
							<div class="col-md-12">
							
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $row->id_proyecto; ?>">
											<h4>
												<?php echo $N_prog; ?>
											</h4>
											</a>
									</div><!--/ col panel heading-->
								</div><!--/ col panel panel default-->
								<div id="<?php echo $row->id_proyecto; ?>" class="panel-collapse collapse">
									<div class="panel-body">
										
											
											<!-----Codigo--->
											<div class="row">
												<div class="col-md-4">
													<p>Lider de proyecto: <?php echo $N_Personal; ?> 
													<br/>Cliente:<?php echo $N_cliente; ?>
													<br/>Depto. responsable: <?php echo $res; ?>
													
													</p>											
													
												</div>
												<div class="col-md-4">
													<p>
													<br/>Alcance: <?php echo $alc; ?>
													<br/>Antecedentes: <?php echo $ant; ?>										
													</p>											
													
												</div>
												<?php  
													switch($br){
															case 1:	$nom_b="Diseño Gráfico";
															break;
															case 2:	$nom_b="Diseño Web";
															break;
															case 3:	$nom_b="Fotografía";
															break;
															case 4:	$nom_b="Video";
															break;	
															default: $nom_b="No tiene brief";
															break;					
																}										
												?>
												<div class="col-md-4">
													<p>
													
													Fecha inicio: <?php echo $f_i; ?>
													<br/>Fecha de t&eacute;rmino: <?php echo $f_t; ?>
													<br/>Estatus: <?php echo $sa; ?>
													<br/>Tipo de brief: <?php echo $nom_b; ?>
													
													</p>
													
												</div>
												
											</div>
											<hr/>
											
											
											
											<?php
											/*
											1.-D_G
											2.-D_W
											3.-Fotografía
											4.-Video
										*/
											switch($sta){
												case 1:
													
													break;
												case 2:	
														if($br>=1){
																switch($br){
																	case 1:
																			
																			echo "<a class='btn btn-primary' href='".base_url()."index.php/dg/mostrar/".$row->id_proyecto."'>
																			<span class='glyphicon glyphicon-new-window'>
																			</span>
																			Ver Brief
																			</a>";
																		break;
																	case 2:
																		
																			echo "<a class='btn btn-primary' href='".base_url()."index.php/web/mostrar/".$row->id_proyecto."'>
																			<span class='glyphicon glyphicon-new-window'>
																			</span>
																			Ver Brief
																			</a>";
																		break;
																	case 3:
																		
																			echo "<a class='btn btn-primary' href='".base_url()."index.php/fotografia/mostrar/".$row->id_proyecto."'>
																			<span class='glyphicon glyphicon-new-window'>
																			</span>
																			Ver Brief
																			</a>";
																		break;
																	case 4:
																			
																			echo "<a class='btn btn-primary' href='".base_url()."index.php/video/mostrar/".$row->id_proyecto."'>
																			<span class='glyphicon glyphicon-new-window'>
																			</span>
																			Ver Brief
																			</a>";
																		break;
	
																}
															
															
														}else{
															echo '
																<div class="col-mx-12 text-center">
																	<label>Asignar brief</label>
																	<div class="btn-group" role="group" aria-label="...">
																	';
															echo"<a class='btn btn-default btn-sm' href='".base_url()."index.php/web/agregar/".$row->id_proyecto."'>
																	Web
																  </a>
																";
															echo"<a class='btn btn-default btn-sm' href='".base_url()."index.php/video/agregar/".$row->id_proyecto."'>
																	Video
																  </a>
																";
															echo"<a class='btn btn-default btn-sm' href='".base_url()."index.php/dg/agregar/".$row->id_proyecto."'>
																	Dise&ntilde;o Gr&aacute;fico
																  </a>
																";
															echo"<a class='btn btn-default btn-sm' href='".base_url()."index.php/fotografia/agregar/".$row->id_proyecto."'>
																	Fotograf&iacute;a
																  </a>
																";	
																		
															echo'			
																	</div>
															</div>
															
															';
															
														}
													break;
												case 3:
													echo 'Cierre';
													break;
														
												}
												echo '
													<hr/>
													<div class="col-md-4 col-md-offset-4">
														<div class="btn-group btn-group-justified" role="group" aria-label="">
														
															<a class="btn btn-primary" href="'.base_url().'index.php/proyectos/editar/'.$row->id_proyecto.'">
																
																<span class="glyphicon glyphicon-edit">
																</span>
																	Editar
																</a><a class="btn btn-danger" href="'.base_url().'index.php/proyectos/eliminar/'.$row->id_proyecto.'">
																<span class="glyphicon glyphicon-remove">
																</span>
																	Eliminar
																</a>
														</div>
													
													</div>								
												';						
										?>	
									</div><!--Panel Body -->
								</div><!--de id_proyecto -->
							</div><!--Col-md -->
					</div><!--row -->
				</div><!--/.container -->				
						<?php
				
			}
		} else {
			 echo "No Existen Registros de proyectos";
		}
		?>
<div class="row">
	<div class="col-md-9">	
	</div>
		<div class="col-md-3">			
		<a href="agregar" class="btn btn-primary" role="button">
		<span class="glyphicon glyphicon-plus">	</span>Agregar Nuevo
		
		</a>
	</div>
</div>
<?=$this->load->view('empresas/pie_pagina');?>
</body>
</html>


