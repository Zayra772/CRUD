<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zay";

$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];
$edad=$_GET['edad'];
$correo=$_GET['correo'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO zayra (nombre, apellido, edad, correo)
VALUES ('".$nombre."', '".$apellido."', '".$edad."', '".$correo."')";

if ($conn->query($sql) === TRUE) {
  echo "Registro creado correctamente";
  echo "<br><br>";
  echo "<a href='./formulario.html'>Insertar más</a>"; 
  echo "<br><br>";
  echo "<a href='./consultar.php'>Consultar Registro </a>"; 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>