<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<title>Inicio</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/materialize.css">
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<header>
		<nav>
		    <div class="nav-wrapper container">
		      <a href="#!" class="brand-logo">Logo</a>
		      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		      <ul class="right hide-on-med-and-down">
		        <li><a href="">Inicio</a></li>
		       
		      </ul>
		      <ul class="side-nav" id="mobile-demo">
		        <li><a href="">Inicio</a></li>
		      </ul>
		    </div>
		  </nav>
	</header>
	
	<div class="container">
		<div class="col s12 m12 l12" >
			<div class="card">
				<div class="row">
					<h3 class="center-align">Registrar Nuevo Taxista</h3>
				</div>
				<div class="row">
					<form action="" class="col s12 m12 l12">
						<div class="row">
							<div class="input-field col s4">
								<input id="nom" type="text" class="validate" name="nombre" required>
	         				 <label for="nom">Nombre</label>
							</div>
							<div class="input-field col s4">
								<label for="ap" >Apellido Paterno</label>
								<input id="ap" type="text" name="paterno" required>
							</div>
							<div class="input-field col s4">
								<label for="am" >Apellido Materno</label>
								<input id="am" type="text" name="materno" required>
							</div>
						</div><!--Nombre-->
					</form>
				</div>
			
			
			</div>
		</div>
	</div>




    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
</body>
</html>