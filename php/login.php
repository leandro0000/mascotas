<?php 

include "conexion.php";

ob_start();


$usuario=$_POST['usuario'];
$contra=$_POST['contra'];

if ( $$usuario == ""&& $contra==""){
  
    echo "todos los compos son abligatorios";
    die();

}


$sql = mysqli_query($conn,"SELECT * FROM user WHERE correo='".$usuario."' and contraseña='".$contra."'");

session_start();
$_SESSION['correo']=$usuario;

$ns = mysqli_num_rows($sql);

if ($ns == 1){
echo "1";

}else {

    echo "usuario o contraseña incorretos";
    mysqli_close($conn);

}




?>