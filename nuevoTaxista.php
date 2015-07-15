<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<title>Registrar</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/materialize.css">
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<?php include 'nav.php'; ?>
	
	<div class="container">
		<div class="col s12 m12 l12" >
			<div class="card padding-largo">
				<div class="row">
					<h3 class="center-align">Registrar Nuevo Taxista</h3>
				</div>
				<div class="row">
					<form action="" class="col s12 m12 l12">
						<div class="row">
							<div class="input-field col s4  m4 l4">
								<input id="nom" type="text" class="validate" name="nombre" required>
	         				 <label for="nom">Nombre</label>
							</div>
							<div class="input-field col s4  m4 l4">
								<label for="ap" >Apellido Paterno</label>
								<input id="ap" type="text" name="paterno" required>
							</div>
							<div class="input-field col s4  m4 l4">
								<label for="am" >Apellido Materno</label>
								<input id="am" type="text" name="materno" required>
							</div>
						</div><!--Nombre-->

						<div class="row">
							<div class="input-field col s4 m4 l4 " >
								<input id="nom" type="text" name="calle" required>
	         				 <label for="nom">Calle</label>
							</div>
							<div class="input-field col s4 m4 l4 ">
								<label for="ap" >Colonia/Fraccionamiento</label>
								<input id="ap" type="text" name="colonia" required>
							</div>
							<div class="input-field col s4  m4 l4">
								<label for="am" >Numero</label>
								<input id="am" type="text" name="numero" required>
							</div>
						</div>
						<div class="row">
							<div class="center-align">
								<input type="submit" value="registrar" class="light-blue accent-2 btn"  >
							</div>
						</div>
					</form>
				</div>
			
			
			</div>
		</div>
	</div>


	<?php 
		include("php/conection.php");

		if (isset($_POST['nombre'])) {
			$nombre=_POST['nombre'];
			$paterno=_POST['paterno'];
			$materno=_POST['materno'];
			$calle=_POST['calle'];
			$colonia=_POST['colonia'];
			$numero=_POST['numero'];

		}

	?>

    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
</body>
</html>