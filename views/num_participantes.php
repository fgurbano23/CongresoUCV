<!DOCTYPE html>
<html>
<head>
	<title>Lista de patrocinantes</title>
	<link rel="stylesheet" type="text/css" href="../static/css/bootstrap.css">
</head>
<body>
<h1 align="center">Lista de patrocinantes </h1>
	<div class="container">
	<div class="row">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Empresa</th>
				<th>CI</th>
				<th>Coreo electrónico</th>
				<th>Telf.Celular</th>
				<th>Telf.Habitacion</th>
				<th>Tipo de pago</th>
				<th>Comprobante de pago</th>
				<th>Fecha de pago</th>
			</tr>
		</thead>
		<tbody>

<?php 

$table="registro_participantes";
$bdname="congresoucv";
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password,$bdname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}

	$result = $conn->query("select * from registro_participantes order by nombre_participante");

	if($result->num_rows > 0){

while($row = $result->fetch_assoc()) {

	echo "<tr>".
        "<td>".$row["nombre_participante"]."</td>".
        "<td>".$row["empresa"]."</td>".
        "<td>".$row["ci_participante"]."</td>".
        "<td>".$row["correo_participante"]."</td>".
        "<td>".$row["telefono_celular"]."</td>".
        "<td>".$row["telefono_habitacion"]."</td>".
        "<td>".$row["tipo_pago"]."</td>".
        "<td>".$row["id_pago"]."</td>".
        "<td>".$row["fecha_pago"]."</td>".
        "</tr>";
	}
}

	else{
		echo "NO HAY PARTICIPANTES REGISTRADOS";
	}




 ?>




















			</tbody>
		</table>
	</div>
</div>

</body>
</html>

