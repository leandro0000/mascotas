<?php 
ob_start();

$host="localhost";
$db="id13551159_tienda";
$user="id13551159_leandro"; 
$pass="Emtelco2020+"; 


$conn= new mysqli($host,$user,$pass,$db);

if (!$conn){
die("error al conectar".mysqli_connect_error());

}else{
    echo "";
}




?>
