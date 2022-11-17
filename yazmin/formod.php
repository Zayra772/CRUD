
<?php
$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];
$edad=$_GET['edad'];
$correo=$_GET['correo'];
$id=$_GET['id'];
?>

<!DOCTYPE html>
<html >
<head>
    <title>Solita</title>
</head>
<body style="background-color: skyblue ">
    <form action="modificar.php" method="get">
        ID
        <input type="text" name="id" value='<?php echo $id; ?>'>
        <br><br>
        Ingresa tu nuevo nombre:
        <input type="text" name="nombre" value='<?php echo $nombre; ?>'>
        <br><br>
        Ingresa tu nuevo apellido:
        <input type="text" name="apellido" value='<?php echo $apellido; ?>'>
        <br><br>
        Ingresa tu nueva edad:
        <input type="text" name="edad" value='<?php echo $edad; ?>'>
        <br><br>
        Ingresa tu nuevo correo:
        <input type="text" name="correo" value='<?php echo $correo; ?>'>
        <br><br>
        <input type="submit" value="Guardar">

    </form>
</body>
</html>