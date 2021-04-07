<?php 

include "conexion.php";

$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];



$sql= "INSERT INTO  user (nombre,correo,contraseña)values('$nombre','$correo','$contraseña')";

if (mysqli_query($conn,$sql)){

    echo "registro guardado"."<br>";

}else {
    echo "error al guardar".mysqli_error($conn);
}
mysqli_close($conn);


?>