<?php 

$nombre="";
$correo="";
$id="";
$telfc="";
$fecha_pago="";
$id_pago="";

$nombre=$_POST["nombre_p"];
$empresa=$_POST["empresa_p"];
$id=$_POST["id_p"];
$correo=$_POST["email_p"];
$telfc=$_POST["telfc_p"];
$tipo_pago =$_POST["tipo_pago_p"];
$id_pago=$_POST["id_pago_p"];
$fecha_pago=$_POST["fecha_pago_p"];

$table="registro_patrocinante";
$bdname="congresoucv";
$servername = "localhost";
$username = "root";
$password = "";


if( $nombre=="" || $correo=="" || $id=="" || $telfc=="" || $id_pago=="" || $fecha_pago==""){
	echo "POR FAVOR LLENE LOS CAMPOS REQUERIDOS PARA PODER SER REGISRADO";
	return; 
}



$sql="insert into ".$table." values ('".$nombre."','".$empresa."','".$id."','".$correo."','".$telfc."','".$tipo_pago."','".$id_pago."','".$fecha_pago."')";

$select="select id_patrocinante from ".$table." where id_patrocinante ='".$id."'";

$conn = new mysqli($servername, $username, $password,$bdname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}

	$result = $conn->query($select);

if($result->num_rows > 0){

	echo "ÉSTE PATROCINANTE YA ESTÁ REGITRADO EN EL SISTEMA";
	return;
	
	}

else{

if ($conn->query($sql) === TRUE) {

    echo "USTED HA SIDO REGISTRADO DE FORMA EXITOSA EN NUESTRO SISTEMA, GRACIAS POR COLABORAR Y PATROCINAR NUESTRO EVENTO";

	}

else {

   echo "Error: " . $sql . "<br>" . $conn->error;

	}	

}

$conn->close();


 ?>