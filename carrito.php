<?php 

include "php/conexion.php";




 if (isset($_GET['id'])){

 $sql= $conn->query("SELECT * FROM productos WHERE id=".$_GET['id'])or die($conn -> error);

  if (mysqli_num_rows($sql) >0){

	$row = mysqli_fetch_row($sql);
	
  }
  
   

 }



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity=
	"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/carro.css">
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script src='jquery.elevatezoom.js'></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<script type="text/javascript" src="js/evento.js"></script>
</head>
<body>

    <div class="inicio_pro">
		<div class="blo_pro">
			<ul>
			   <li><a href="#"> <span class="">telefono</span> + 314 561 9800</a></li>
			   <li><a href="#"> <span class="">correo</span> + leandro.red@hotmail.es</a></li>
			</ul>
		   
		</div>
			<div class="blo_pro1">
				<ul>
				   <li><a href="#" class="">facebook</a></li>
				   <li><a href="#" class="">tiwder</a></li>
				   <li><a href="#" class="">int</a></li>
				   <li><a href="#" class="">google</a></li>
				</ul>
   
			</div>      
	   </div>

	   <div class="inicio_2">
		<div class="blo_pro2">
			<ul>
				<li><img src="img/logo.png" alt=""></li>
			</ul>
		</div>
	
		 <div class="menu">
			 <nav class="menu1">
				 <ul>
					 <li><a href="#">Account</a></li>
					 <li><a href="#">Wishlist</a></li>
					 <li><a href="#">Checkout</a></li>
					 <li> <img src="img/car.png" alt=""><a href="#">Cart (0)</a></li>
					 <li><a class="per" href="#">Login</a></li>				 
				 </ul>
			 </nav>
		 </div>
		<br>
	
		<div class="blo_login">
			<form id="registro" class="from">
				<h2 class="ti_pro">estas registrado? <span>registrate aqui</span></h2>
				<input class="login" type="text" placeholder="nombre">
				<input class="login" type="email" placeholder="correo">
				<input  class="login" type="password" placeholder="contraseña">
				<input class="evento" type="submit" value="registro">
			</form>
	
			<form id="login" class="from">
				<h2 class="ti_pro">inicio de cession</h2>
				<input class="login" type="email" placeholder="correo">
				<input class="login" type="password" placeholder="correo">
				<input class="evento" type="submit" value="entar">				 	
			</form>	
		</div>	
	   </div>

	    <div class="img_carrito">
			<div class="img">
				<ul class="img_lista">
					<li><img id="d1" onclick="fun();" src="<?php echo $row[4] ?>" alt="">											
					</li>
					<li><img onclick="lis();" class="zoo" src="<?php echo $row[1]?>" alt=""></li>
					<li><img onclick="list();" src="<?php echo $row[2] ?>" alt=""></li>
					<li><img onclick="list1();" src="<?php echo $row[3] ?>" alt=""></li>
				</ul>
			</div>
			<div class="img_pro">
				<img id="d2" src="<?php echo $row[4] ?>" alt="" >
			</div>
			<div class="tex">
				<h4>Cpu Gamer Amd Ryzen 5 3400g, Ssd 240gb, 8gb Ram</h4>
				<h2>$2.335.000</h2>
				<a href="compra.php?id=<?php echo $row['0'] ?>" class="btn btn-warning">comprar</a>

			</div>
		</div>

			<script>
				function fun(){
                
				var numero =  document.getElementById("d2");
				numero.src = "<?php echo $row[4] ?>";
				$('#d2').elevateZoom();

				}

				function lis(){

			     var num = document.getElementById("d2")
                  num.src = "<?php echo $row[1] ?>";
				  $('#d2').elevateZoom();

				}

				function list(){
					  var lista1 = document.getElementById("d2")
					  lista1.src = "<?php echo $row[2] ?>"
					  $('#d2').elevateZoom();
				  }

				  function list1(){
					  var lista2 = document.getElementById("d2")
					  lista2.src = "<?php echo $row[3] ?>"
					  $('#d2').elevateZoom();

				  }
			</script>
        
					

		
		
		

    
</body>
</html>