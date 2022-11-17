<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zay";

$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];
$edad=$_GET['edad'];
$correo=$_GET['correo'];
$id=$_GET['id'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE zayra SET nombre='".$nombre."', apellido='".$apellido."', edad='".$edad."', correo='".$correo."' WHERE id='".$id."'";

if ($conn->query($sql) === TRUE) {
  echo "Modificación creada correctamente";
  echo "<br><br>";
  echo "<a href='./formulario.html'>Insertar más</a>"; 
  echo "<br><br>";
  echo "<a href='./consultar.php'>Consultar Registro </a>";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
