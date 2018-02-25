<!DOCTYPE html>
<html>
<head>
	<title>Lista de patrocinantes</title>
	<link rel="stylesheet" type="text/css" href="../static/css/bootstrap.css">
</head>
<body>

<h1 align="center">Lista de participantes </h1>

<div class="container">
	<div class="row">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Empresa</th>
				<th>CI/RIF</th>
				<th>Telf.Contacto</th>
				<th>Coreo electrónico</th>
				<th>Tipo de pago</th>
				<th>Comprobante de pago</th>
				<th>Fecha de pago</th>
			</tr>
		</thead>
		<tbody>
					<?php 

$table="registro_patrocinante";
$bdname="congresoucv";
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password,$bdname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}

	$result = $conn->query("select * from registro_patrocinante order by nombre_patrocinante");

	if($result->num_rows > 0){

while($row = $result->fetch_assoc()) {
        echo "<tr>".
        "<td>".$row["nombre_patrocinante"]."</td>".
        "<td>".$row["empresa_patrocinante"]."</td>".
        "<td>".$row["id_patrocinante"]."</td>".
        "<td>".$row["correo_patrocinante"]."</td>".
        "<td>".$row["telefono_contacto"]."</td>".
        "<td>".$row["tipo_pago"]."</td>".
        "<td>".$row["id_pago"]."</td>".
        "<td>".$row["fecha_pago"]."</td>".
        "</tr>";
    }
	
	}

	else{
		echo "NO HAY PATROCINANTES REGISTRADOS";
	}

 ?>
		</tbody>
	</table>	
			
	</div>
</div>





</body>
</html>