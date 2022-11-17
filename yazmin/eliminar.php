<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zay";

$id=$_GET['id'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM zayra WHERE id=".$id;

if ($conn->query($sql) === TRUE) {
  echo "Registro ELIMINADO correctamente";
  echo "<br><br>";
  echo "<a href='./formulario.html'>Insertar más</a>"; 
  echo "<br><br>";
  echo "<a href='./consultar.php'>Consultar Registro </a>"; 
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>