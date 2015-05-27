<!DOCTYPE html>
<html lang="en">
     <head>
     <title>FOTOS</title>
     <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="css/style.css">
	  <link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen"> 
     <link rel="stylesheet" href="css/prettyPhoto.css">
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/superfish.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
     <script src="js/sForm.js"></script>
     <script src="js/jquery.prettyPhoto.js"></script>
	 <script src="js/css3-mediaqueries.js"></script>
     <script>
     
      
      
        $(document).ready(function(){
    $("a[data-gal^='prettyPhoto']").prettyPhoto({theme:'facebook'});
    
    });      
     </script>
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
                         <li><a href="#"> ADMINISTRATIVO</a></li>
                         <li><a href="#">COCINA</a></li>
                         <li><a href="#">MESEROS</a></li>
                     </ul>
				   </li>
                   <li><a href="index-2.php">MENU</a></li>
                   <li class="current"><a href="index-3.php">FOTOS</a></li>
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
    <div class="col-full">
      <h2>Fotos y Videos de la semana</h2>
    </div>
    <div class="clear"></div>
	
	<div class="row">
    <div class="Fotos y Videos de la semana">
      <?php require("conex.php");$re=mysql_query("SELECT * FROM actividad ORDER BY actividad.fecha DESC");
      while($datos=mysql_fetch_array($re)) { echo"
      
      <div class='col-1-2'>
  	  	<div class='wrap-col'>
          <a href='".$datos['foto']."' data-gal='prettyPhoto[1]'><span><img src='".$datos['foto']."' alt=''></span></a>
        </div>
      </div>"; } ?>

      <div class="col-1-2">
        <div class="wrap-col">
          <a href="images/20141229_173743.jpg" data-gal="prettyPhoto[1]"><span><img src="images/20141229_173743.jpg" alt=""></span></a>
        </div>
      </div>

      <div class="col-1-2">
        <div class="wrap-col">
          <a href="images/20141229_173747.jpg" data-gal="prettyPhoto[1]"><span><img src="images/20141229_1737471.jpg" alt=""></span></a>
        </div>
      </div>
      
      <div class="col-1-2">
        <div class="wrap-col">
          <a href="images/20141229_173753.jpg" data-gal="prettyPhoto[1]"><span><img src="images/20141229_1737531.jpg" alt=""></span></a>
        </div>
      </div>

    </div>

    </div>
   
    <div class="row">
    <div class="bottom_block">
      <div class="col-1-2">
        <h3>BUSCANOS EN</h3>
        <div class="socials">
          <a href="#"></a>
          <a href="#"></a>
          <a href="#"></a>
        </div>
        <nav><ul>
                   <li><a href="index.php">CASA</a></li>
                   <li><a href="index-1.php">PERSONAL</a></li>
                   <li><a href="index-2.php">MENU</a></li>
                   <li class="current"><a href="index-3.php">FOTOS</a></li>
                   <li><a href="index-4.php">NUEVOS </a></li>
                   <li><a href="index-5.php">CONTACTOS</a></li>
                 </ul></nav>
      </div>
      <div class="col-1-2">
        <h3> NUEVOS EVENTOS</h3>
        <p class="col1">Para ver mas hacerca de los eventos que se hara en los meses y novedades</p>
        <form id="nuevos eventos">
                  <div class="success">aqui puedes sucribirte para pedir comida  a domicilio!</div>
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