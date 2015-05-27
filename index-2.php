<!DOCTYPE html>
<html lang="en">
     <head>
     <title>MENU</title>
     <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="css/style.css">
	  <link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen"> 
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/superfish.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
     <script src="js/sForm.js"></script>
	 <script src="js/css3-mediaqueries.js"></script>
     <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <link rel="stylesheet" media="screen" href="css/ie.css">

    <![endif]-->
     </head>
     <body>
       <div class="main">
<!--==============================header=================================-->
 <header> 
  <div class="zerogrid">
    <div class="col-full">
	<div class="wrap-col">
    <h1><a href="index.php"><img src="images/madagascarlogo111.jpg" alt="EXTERIOR"></a> </h1>
    
         <div class="menu_block">
           <nav>
            <ul class="sf-menu">
                   <li><a href="index.php">CASA</a></li>
                   <li class="with_ul"><a href="index-1.php">PERSONAL</a>
				   	<ul>
                         <li><a href="#">ADMINISTRATIVO</a></li>
                         <li><a href="#">COCINA</a></li>
                         <li><a href="#">MESEROS</a></li>
                     </ul>
				   </li>
                   <li class="current"><a href="index-2.php">MENU</a></li>
                   <li><a href="index-3.php">FOTOS</a></li>
                   <li><a href="index-4.php">NUEVOS </a></li>
                   <li><a href="index-5.php">CONTACTOS</a></li>
                 </ul>
           </nav>
           <div class="clear"></div>
           </div>
           <div class="clear"></div>
		</div>
      </div>
    </div>
</header>
<!--=======content================================-->

<div class="content">
  <div class="zerogrid">
  	
	<div class="row">
    <div class="col-3-6">
      <div class="wrap-col">
        <h2>Nuestro Menu de hoy</h2>
        <p class="col2 inn1"><a href="#">Tenemos para ofrecerle pollo a la broaster y braza,tambien papas,salchipapas,hamburguesa y lo mas llamativo el madagascar que cuando lo pruebes te deleitaras de los sabores,en nuestro menu podras encontrar variedad de platos como,tradicionales,exoticos,nacionales,y extranjeros eso se encuentra el la clase d almuerzos.</a></p>
        <p> Aparte tenemos deliciosos pasteles y helados en variedad la casa madagascar,cafe te toddy leche etc... de los helados tenemos muchas variedades de sabores formas y el especial multimada</p>
        <div class="menu">

          <div class="row">

            <?php require("conex.php");
            $re=mysql_query("SELECT * FROM carta INNER JOIN menuhoy ON carta.id = menuhoy.idPlato");
            while($datos=mysql_fetch_array($re)) { echo"
            <div class='col-1-2'>
              <div class='wrap-col'>
                <img src='".$datos['foto']."' alt='' class='img_inner'>
                <h3><a href='#'>".$datos['nombre']."</a></h3>
              </div>
            </div>"; } ?>

          </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
	
	<div class="col-1-6"><div class="wrap-col"><!--empty--></div></div>
	
    <div class="col-2-6">
		<div class="wrap-col">
      <h2 class="head2">Chef’s </h2>
      <ul class="list l1">
        <li><a href="#"> Tendremos muchas variedades de platos</a></li>
        <li><a href="#"> Cada dia de la semana habra disintos platos</a></li>
        <li><a href="#"> Aparte temdremos platos especiales diferentes platos que que solo veras en MADAGASCAR y sentiras distintos sabores</a></li>
        <li><a href="#"> Te ofreceros el MADAGASCAR de la casa</a></li>
        <li><a href="#"> Tambien te ofreceremos refrescos de toda marca</a></li>
        <li><a href="#"> Los almuerzos son variedad de cada dia </a></li>
        <li><a href="#"> Los pastesles se sirven entero y porcion y tambien se hace pedidos</a></li>
        <li><a href="#"> Tambien le ofrecemos diferentes tipos de queques empanadas pastelitos rollo de queso etc..</a></li>
        <li><a href="#"> Los jugos de diferentes tipos de frutas </a></li>
        <li><a href="#"> Helados en toda su variedad y diferentes tipos</a></li>
        <li><a href="#"> Y lo diferente es lo que madagascar le dara de platos</a></li>
        <li><a href="#"> No nos olvidamos que tendremos cada mes tendremos nuevas novedades cada mes </a></li>
        <li><a href="#"> Aparte habra juegos que habra regalos</a></li>
        <li class="mb0"><a href="#"> MADAGASCAR TE ESPERA </a></li>
      </ul>
      <h2 class="head1">Lista del menu de hoy</h2>
      <ul class="list">
        <li><a href="#"> En el almuerzo sopa mani,segundo chorizo,saize.</a></li>
        <li><a href="#"> Se servira pollo a la braza broaster entero a 50 55 y 60 bs.</a></li>
        <li><a href="#">Tambien esta la porcion de pollo a 14 bs.</a></li>
        <li><a href="#"> Salchipapas a solo 10 bs.</a></li>
        <li><a href="#">La hamburguesa de hoy sera la simple doble con queso y aceituna.</a></li>
        <li><a href="#">Pipocas de pollo que se servira desde las 8am hasta 14pm.</a></li>
        <li><a href="#"> ambien se vendera todo el dia porcion de papas.</a></li>
	<li><a href="#"> Los pasteles de hoy tendremos de chocolate kiwi naranja frutilla desde 45 bs 70 bs y para cumpleaños se hacen pastles a pedido.</a></li>      
	<li><a href="#"> las porciones de pastel estan a tan solo 4 5 7 y 10bs.</a></li>
	<li><a href="#"> El vaso de vino esta a 10 bs 20bs 30 bs .</a></li>
	<li><a href="#"> La botella depende del año es el costo tenemos de 60bs hasta 475bs.</a></li>
	<li><a href="#"> se servira helados de todos los sabores en cono vaso sandwiche.</a></li> 
	<li><a href="#"> tenemos toda clase de helados y sabores el especial de fines de semana y feriados se servira el helado madagascar.</a></li>
         </ul>
	  </div>
    </div>
    </div>
     
    <div class="row">
    <div class="bottom_block">
      <div class="col-1-2">
        <h3>SIGUENOS EN</h3>
        <div class="socials">
          <a href="#"></a>
          <a href="#"></a>
          <a href="#"></a>
        </div>
        <nav><ul>
                   <li><a href="index.php">CASA</a></li>
                   <li><a href="index-1.php">PERSONAL</a></li>
                   <li class="current"><a href="index-2.php">MENU</a></li>
                   <li><a href="index-3.php">FOTOS</a></li>
                   <li><a href="index-4.php">NUEVOS </a></li>
                   <li><a href="index-5.php">CONTACTOS</a></li>
                 </ul></nav>
      </div>
      <div class="col-1-2">
        <h3>NUEVOS EVENTOS</h3>
        <p class="col1">Para ver mas hacerca de los eventos que se hara en los meses y novedades</p>
        <form id="nuevos eventos">
                  <div class="success"> aqui puedes sucribirte para pedir comida  a domicilio!</div>
                  <label class="email">
                       <input type="email" value="Enter e-mail address" >
                       <a href="#" class="btn" data-type="submit">subscribe</a> 
                        <span class="error"> *Esto no es valido en E_m@ils.</span>
                  </label> 
              </form> 
          </div>
      </div>
	  </div>
    </div>
  </div>
</div>
<!--==============================footer=================================-->
<?php
require('footer.php');
?>
</body>
</html>