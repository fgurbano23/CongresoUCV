<?php 
$nombre=$_POST["nombre"];
$empresa=$_POST["empresa"];
$correo=$_POST["email"];
$cedula=$_POST["ci"];
$telfc=$_POST["telfc"];
$telfh=$_POST["telfh"];

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$select="select ci from participantes where ci='".$cedula."'";

$conn->query()

$insert= "insert into".$table."values"."(".$cedula.",".$nombre.",".$empresa.",".$correo.",".$telfc.",".$telfh.")";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}











 ?>