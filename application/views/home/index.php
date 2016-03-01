<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?= base_url('css/bootstrap-responsive.css') ?>" rel="stylesheet">
	<link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet" media="screen">
	<title> Mi Sitio </title>
</head>

<body>
	<div class="container-fluid">
  		<div class="row-fluid">

		    <div class="span3">
      			<p> Menú Sistema </p>
    		</div>

		    <div class="span9">
      			<?= $this->load->view($contenido) ?>
    		</div>

  		</div>
	</div>

	<script src="<?= base_url('js/jquery.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>
</html>