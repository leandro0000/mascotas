<?php

include "conexion.php";
 


$fileinfo=PATHINFO($_FILES["image"]["name"]);
	$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
	move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $newFilename);
	$location="upload/" . $newFilename;
	
	$enviar=PATHINFO($_FILES["nombre"]["name"]);
	$nuevo=$enviar['filename'] ."_". time() . "." . $enviar['extension'];
	move_uploaded_file($_FILES["nombre"]["tmp_name"],"../upload/" . $nuevo);
	$ruta="upload/" . $nuevo;
 
	mysqli_query($conn,"insert into upload (img_pro) values ('$location')");

header('/');


?>