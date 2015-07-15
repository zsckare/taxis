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
	<?php include 'nav.php'; ?>

	<div class="container">
		<div class="card padding-largo" >
			<div class="row">
				<h3 class="center-align">
					Lista General de Taxistas
				</h3>
			</div>
			<div class="row">
				<table>
					<thead>
						<tr>
							<th data-field="id">Name</th>
							<th data-field="name">Item Name</th>
							<th data-field="price">Item Price</th>
						</tr>
					</thead>
						
					<tbody>
						<tr>
							<td>Alvin</td>
							<td>Eclair</td>
							<td>$0.87</td>
						</tr>
						      
					</tbody>
				</table>
			</div>
		</div>


	</div>






    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
</body>
</html>