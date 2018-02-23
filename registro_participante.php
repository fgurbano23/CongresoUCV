<?php
$nombre="";
$correo="";
$cedula="";
$telfc="";
$fecha_pago="";
$id_pago="";

$nombre=$_POST["nombre"];
$empresa=$_POST["empresa"];
$correo=$_POST["email"];
$cedula=$_POST["ci"];
$telfc=$_POST["telfc"];
$telfh=$_POST["telfh"];
$tipo_pago =$_POST["tipo_pago"];
$id_pago=$_POST["id_pago"];
$fecha_pago=$_POST["fecha_pago"];

$table="registro_participantes";
$bdname="congresoucv";
$servername = "localhost";
$username = "root";
$password = "";


if( $nombre=="" || $correo=="" || $cedula=="" || $telfc=="" || $di_pago=="" || $fecha_pago=="" ){
	echo "POR FAVOR LLENE LOS CAMPOS REQUERIDOS PARA PODER SER REGISRADO";
	return; 
}



$sql="insert into ".$table." values ('".$nombre."','".$empresa."','".$cedula."','".$correo."','".$telfc."','".$telfh."','".$tipo_pago."','".$id_pago."','".$fecha_pago."')";

$select="select ci_participante from ".$table." where ci_participante ='".$cedula."'";

$conn = new mysqli($servername, $username, $password,$bdname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}

	$result = $conn->query($select);

if($result->num_rows > 0){

	echo "ÉSTE USUARIO YA ESTÁ REGITRADO EN EL SISTEMA";
	return;
	
	}

else{

if ($conn->query($sql) === TRUE) {

    echo "USTED HA SIDO REGISTRADO DE FORMA EXITOSA EN NUESTRO SISTEMA";

	}

else {

   echo "Error: " . $sql . "<br>" . $conn->error;

	}	

}

$conn->close();

 ?>