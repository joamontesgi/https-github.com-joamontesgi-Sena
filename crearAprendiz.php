 <?php
 include("headerCalidad.php");
 include("backend/activeSession.php");
 include("backend/baseDatos.php");
 ?>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<br>
<br>
	<main id="main">
		<div class="container" style="text-align: center;">
			
			<form class="form-horizontal" action="backend/datosAprendiz.php" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label class="control-label col-sm-4" for="cedula">Identificación Aprendíz:</label>
					<div class="col-sm-5">
						<input type="cedula" class="form-control" id="cedula" placeholder="Ejemplo: 1053828XXX" name="documento">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4" for="pwd">Nombre Aprendíz: </label>
					<div class="col-sm-5">          
						<input type="text" class="form-control" id="pwd" placeholder="Ejemplo: Pepito Pérez" name="nombre">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4" for="email">Correo Electrónico Aprendíz: </label>
					<div class="col-sm-5">          
						<input type="text" class="form-control" id="email" placeholder="Ejemplo: usuario@misena.edu.co" name="correo">
					</div>
				</div>
			
					<label class="control-label col-sm-4" for="foto">Foto del aprendiz (sólo formato JPEG): </label>
					<div class="col-sm-5">          
						<input type="file" class="form-control" id="foto" name="foto" placeholder="Ejemplo: Foto del Aprendiz">
					</div>
				

		
						<button type="submit" class="btn btn-info btn-lg">Guardar datos</button>
					</div>
				</div>
			</form>
		</div>

<br>
<br>
<br>


	</main>

	<?php
	include("footer.php");
	?>
