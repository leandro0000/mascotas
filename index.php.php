<!DOCTYPE html>


<html>

<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
</head>

<body>


    <section class="responsive">

        <div class="">

            <div class="inicio_pro">
                <div class="blo_pro">
                    <ul>
                        <li>
                            <a href="#"> <span class="">telefono</span> + 314 561 9800</a>
                        </li>
                        <li>
                            <a href="#"> <span class="">correo</span> + leandro.red@hotmail.es</a>
                        </li>
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


                    <form id="login" class="from">
                        <h2 class="ti_pro">inicio de cession</h2>
                        <p> usuario es leancho20@hotmail.com, contraseña:123456789aass</p>
                        <input class="login form-control" type="email" placeholder="correo" id="l1">
                        <input class="login form-control" type="password" placeholder="correo" id="l2">
                        <input class="evento btn btn-danger form-control" type="submit" value="entrar">



                    </form>

                </div>

            </div>

            <div class="blo-pro3">
                <div class="alter_pro">
                    <aside>
                        <ul class="slider" id="header">
                            <li><a href="#">Home</a></li>
                            <li class="blo"><a href="#">Blog</a>
                                <ul>
                                    <li><a href="#">ventas</a> </li>
                                    <li><a href="#">compras</a> </li>
                                    <li><a href="#">pc</a> </li>
                                    <li><a href="#">sevicios</a> </li>
                                </ul>
                            </li>
                            <li><a href="#">404</a></li>
                            <li><a href="#">Contact</a>
                                <ul>
                                    <li><a href="#">ventas</a> </li>
                                    <li><a href="#">compras</a> </li>
                                    <li><a href="#">pc</a> </li>
                                    <li><a href="#">sevicios</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </aside>
                </div>
                <div class="buscardor">
                    <form action="">
                        <input class="buscador" type="search" placeholder="buscar"><img onclick="buscar()" class="lupa" src="img/5.jpg" alt="">
                    </form>
                </div>
            </div>
        </div>

        <div class="carru">

            <head>
                <img class="img_banner" src="img/tienda.jpg" alt="">
            </head>

        </div>

        <div class="blo_pro4 ">
            <div class="categoria ">
                <h2>CATEGORIA</h2>
            </div>
            <div class="categoria ">
                <h2>FEATURES ITEMS</h2>
            </div>

        </div>

        <div class="promo ">
            <div>
                <ul class="lista ">
                    <li><a href="# ">SPORTSWEAR</a><img class="cru " src="img/cruz.png " alt=" ">
                        <div class="lista_pro ">
                            <ul>
                                <li><a href="# ">arma tu pc</a></li>
                                <li><a href="# ">asus</a></li>
                                <li><a href="# ">bord</a></li>

                            </ul>
                        </div>
                    </li>
                    <li><a href="# ">MENS</a>
                        <a href="# "></a>
                    </li>
                    <li><a href="# ">KIDS</a></li>
                    <li><a href="# ">FASHION</a></li>
                    <li><a href="# ">INTERIORS</a></li>
                    <li><a href="# ">CLOTHING</a></li>
                    <li><a href="# ">BAGS</a></li>
                    <li><a href="# ">SHOES</a></li>
                </ul>
            </div>

            <?php while($row=mysqli_fetch_array($sql)){

		?>

            <div class="promo_pro ">
                <img src="<?php echo $row[ 'img'] ?>" alt="">
                <h2>$
                    <?php echo $row['precio'] ?>
                </h2>
                <p>
                    <?php echo $row['descripcion'] ?>
                </p>
                <a class="btn btn-warning btn-sm" href="carrito.php?id=<?php echo $row['id'] ?> ">agregar al carrito</a>



            </div>
            <?php  } ?>


        </div>






        </div>
        <div class="promo">
            <div>
                <ul class="lista1">
                    <li><a href="#">SPORTSWEAR</a>
                    </li>
                    <li><a href="#">ACNÉ</a>
                        <a href="#"></a>
                    </li>
                    <li><a href="#">GRÜNE ERDE</a></li>
                    <li><a href="#">ALBIRO</a></li>
                    <li><a href="#">RONHILL</a></li>
                    <li><a href="#">ODDMOLLY</a></li>
                    <li><a href="#">BOUDESTIJN</a></li>
                    <li><a href="#">CULTURA CREATIVA DE RÖSCH</a></li>
                </ul>
            </div>


            <?php while($fila=mysqli_fetch_array($fil)) {
		?>
            <div class="promo_pro">
                <img src="<?php echo $fila['img'] ?> " alt="">
                <h2>$
                    <?php echo $fila['precio'] ?>
                </h2>
                <p>
                    <?php echo $fila['descripcion'] ?>
                </p>
                <a class="btn btn-warning" href="carrito.php?id=<?php echo $fila['id'] ?>">agregar al carrito</a>
            </div>
            <?php  } ?>


            <div class="bus_pro">
                <h2>RANGO DE PRECIOS</h2>
                <form class="busqueda">
                    <input class="bus" type="text" precio placeholder="$bajo">
                    <input class="bus" type="text" precio placeholder="$alto">
                    <input type="submit" value="buscar">
                </form>

            </div>

        </div>

        <div class="categor ">
            <ul class="cate_pro">
                <li class="dir">Comida</a>
                </li>
                <li class="dir2">Acesorios</li>
                <li class="dir3">Estilos</li>
                <li class="dir4">Camas</li>
                <li class="dir5">Cuidado</li>
            </ul>

        </div>

        <div class="ofertas">
            <div class="ofer_img">
                <img src="img/tienda.jpg" alt="">
            </div>

            <div class="venta" id="s1">
                <img src="img/9.jpg" alt="">
                <h2>$30000</h2>
                <p>Easy Polo Black Edition</p>
                <a href="#" class="btn btn-warning">agregar al carrito</a>
            </div>
            <div class="venta" id="s2">
                <img src="img/10.jpg" alt="">
                <h2>$30000</h2>
                <p>Easy Polo Black Edition</p>
                <a href="#" class="btn btn-warning">agregar al carrito</a>
            </div>

            <div class="venta" id="s3">
                <img src="img/3.jpg" alt="">
                <h2>$30000</h2>
                <p>Easy Polo Black Edition</p>
                <a href="#" class="btn btn-warning">agregar al carrito</a>
            </div>


            <div class="venta" id="s4">
                <img src="img/10.jpg" alt="">
                <h2>$30000</h2>
                <p>Easy Polo Black Edition</p>
                <a href="#" class="btn btn-warning">agregar al carrito</a>
            </div>


            <div class="bt_pro" id="d1">
                <img src="img/1.jpg" alt="">
                <h2>$30000</h2>
                <p>Easy Polo Black Edition</p>
                <a href="#" class="btn btn-warning">agregar al carrito</a>
            </div>


            <div class="bt_pro" id="d2">
                <img src="img/10.jpg" alt="">
                <h2>$30000</h2>
                <p>Easy Polo Black Edition</p>
                <a href="#" class="btn btn-warning">agregar al carrito</a>
            </div>
            <div class="bt_pro" id="d3">
                <img src="img/9.jpg" alt="">
                <h2>$30000</h2>
                <p>Easy Polo Black Edition</p>
                <a href="#" class="btn btn-warning">agregar al carrito</a>
            </div>
            <div class="bt_pro" id="d4">
                <img src="img/12.jpg" alt="">
                <h2>$30000</h2>
                <p>Easy Polo Black Edition</p>
                <a href="#" class="btn btn-warning">agregar al carrito</a>
            </div>
        </div>



        <div class="bt_ti">
            <h2>RECOMMENDED ITEMS</h2>
        </div>

        <div class="slider_final ">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">

                        <div class="slider_promo">
                            <div class="slider_img">
                                <img src="img/1.jpg" alt="">
                                <h2>$30000</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="#" class="btn btn-warning">agregar al carrito</a>
                            </div>

                            <div class="slider_img">
                                <img src="img/1.jpg" alt="">
                                <h2>$30000</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="#" class="btn btn-warning">agregar al carrito</a>
                            </div>

                            <div class="slider_img">
                                <img src="img/3.jpg" alt="">
                                <h2>$30000</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="#" class="btn btn-warning">agregar al carrito</a>
                            </div>

                            <div class="slider_img">
                                <img src="img/4.jpg" alt="">
                                <h2>$30000</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="#" class="btn btn-warning">agregar al carrito</a>
                            </div>

                            <div class="slider_img">
                                <img src="img/5.jpg" alt="">
                                <h2>$30000</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="#" class="btn btn-warning">agregar al carrito</a>
                            </div>


                        </div>

                    </div>

                    <div class="item">
                        <div class="slider_promo">
                            <div class="slider_img">
                                <img src="img/6.jpg" alt="">
                                <h2>$30000</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="#" class="btn btn-warning">agregar al carrito</a>
                            </div>

                            <div class="slider_img">
                                <img src="img/7.jpg" alt="">
                                <h2>$30000</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="#" class="btn btn-warning">agregar al carrito</a>
                            </div>

                            <div class="slider_img">
                                <img src="img/8.jpg" alt="">
                                <h2>$30000</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="#" class="btn btn-warning">agregar al carrito</a>
                            </div>

                            <div class="slider_img">
                                <img src="img/9.jpg" alt="">
                                <h2>$30000</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="#" class="btn btn-warning">agregar al carrito</a>
                            </div>

                            <div class="slider_img">
                                <img src="img/10.jpg" alt="">
                                <h2>$30000</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="#" class="btn btn-warning">agregar al carrito</a>
                            </div>
                        </div>

                        <div class="item">
                            <img src="11.png" alt="">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>



            </div>



            <div class="final_pro">
                <footer class="final_pro1">
                    <div class="lin">
                        <img src="img/logo.png" alt="">
                        <p>Lorem ipsum dolor sit amet, <br> adipisicing elit,sed do <br>eiusmod tempor</p>
                    </div>

                    <div class="lin">
                        <img src="img/1.jpg" class="fin_img" alt="">
                        <p> Circle of Hands<br> 24 DEC 2014</p>

                    </div>

                    <div class="lin">
                        <img src="img/2.jpg" class="fin_img" alt="">
                        <p> Circle of Hands<br> 24 DEC 2014</p>

                    </div>

                    <div class="lin">
                        <img src="img/3.jpg" class="fin_img" alt="">
                        <p> Circle of Hands<br> 24 DEC 2014</p>

                    </div>

                    <div class="lin">
                        <img src="img/4.jpg" class="fin_img" alt="">
                        <p> Circle of Hands<br> 24 DEC 2014</p>

                    </div>

                    <div class="lin">
                        <img src="img/5.jpg" class="fim_img" alt="">


                    </div>


                </footer>



            </div>
    </section>





    <script>
        $(document).ready(function() {
            var numero = 0;

            $(".dir2").click(function() {
                $(".venta").css("display", "none");
                if (numero == 0) {

                    $("#d1").fadeIn();
                    $("#d2").fadeIn();
                    $("#d3").fadeIn();
                    $("#d4").fadeIn();
                }


            });

        });


        $(document).ready(function() {
            var numero = 0;

            $(".dir").click(function() {
                $(".bt_pro").css("display", "none");

                if (numero == 0) {

                    $("#s1").fadeIn();
                    $("#s2").fadeIn();
                    $("#s3").fadeIn();
                    $("#s4").fadeIn();
                }


            });

        });
    </script>

    <script>
        $(document).ready(function() {
            $("#registro").submit(function(e) {
                e.prevenDefault();
                var nombre = $("#n1").val();
                var correo = $("#n2").val();
                var contraseña = $("#n3").val();

                $.ajax({
                    data: {
                        nombre: nombre,
                        correo: correo,
                        contraseña: contraseña
                    },
                    url: 'php/registro.php',
                    type: 'post',
                    success: function(response) {
                        alert(response);
                        $("#n1").val("");
                        $("#n2").val("");
                        $("#n3").val("");

                    }


                });

            });

        });
    </script>



    <script>
        $(document).ready(function() {
            $("#reg").submit(function(e) {
                e.preventDefault();

                var nombre = $("#n1").val();
                var correo = $("#n2").val();
                var contraseña = $("#n3").val();


                $.ajax({
                    data: {
                        nombre: nombre,
                        correo: correo,
                        contraseña: contraseña
                    },
                    url: 'php/registro.php',
                    type: 'post',

                    success: function(response) {
                        alert(response);
                        $("#n1").val("");
                        $("#n2").val("");
                        $("#n3").val("");


                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#login").submit(function(e) {

                e.preventDefault();

                var usuario = $("#l1").val();
                var contra = $("#l2").val();
                $.ajax({

                    data: {
                        usuario: usuario,
                        contra: contra
                    },
                    url: 'php/login.php',
                    type: 'post',
                    success: function(response) {
                        if (response == 1) {

                            location.href = "administrador.php";
                        } else {
                            alert(response);
                        }
                    }


                });

            });

        });
    </script>


</body>

</html>