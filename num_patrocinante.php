
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

        echo "NOMBRE:" . $row["nombre_patrocinante"]."<br> EMPRESA: ".$row["empresa_patrocinante"]."<br> C.I/RIF: " . $row["id_patrocinante"]. " <br> CORREO: " . $row["correo_patrocinante"]." <br> TELF.CONTACTO: ".$row["telefono_contacto"]."<br>
        TIPO DE PAGO: ".$row["tipo_pago"]."<br> ID PAGO: ".$row["id_pago"]."<br> FECHA DE PAGO: ".$row["fecha_pago"]."<br><br>";
    }
	
	}

	else{
		echo "NO HAY PATROCINANTES REGISTRADOS";
	}


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 HOLAAA
 </body>
 </html>
