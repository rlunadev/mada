<!DOCTYPE html>
<html lang="en">
     <head>
     <title>PERSONAL</title>
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
     <script src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
	 <script src="js/css3-mediaqueries.js"></script>
     <script>

      
     $(window).load (
    function(){$('.carousel2').carouFredSel({auto: false,prev: '.prev1',next: '.next1', width: 410, items: {
      visible : {min: 1,
       max: 1
},
height: 'auto',
 width: 410,

    }, responsive: false, 
    
    scroll: 1, 
    
    mousewheel: false,
    
    swipe: {onMouse: false, onTouch: false}});
    
    
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
                   <li class="with_ul current"><a href="index-1.php">PERSONAL</a>
				   	<ul>
                         <li><a href="#">ADMINISTRATIVO</a></li>
                         <li><a href="#">COCINA</a></li>
                         <li><a href="#">MESEROS</a></li>
                     </ul>
				   </li>
                   <li><a href="index-2.php">MENU</a></li>
                   <li><a href="index-3.php">FOTOS</a></li>
                   <li><a href="index-4.php">NUEVOS</a></li>
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
    <div class="col-2-5">
	<div class="wrap-col">
      <h2>Respecto a</h2>
      <img src="images/personal.jpg" alt="" class="img_inner">
      <p class="col1">Nuestro personal esta altamente capasitado para que sea rapida la atencion. </p>
      <p>Queremos darle una atencion que cuando este en nuestras instalaciones se sienta en Casa a gusto con comodidad usted y su Familia teniendo en cuenta que el cliente siempre tiene la razon.  </p>
      Restorant MADAGASCAR,Mi persona y todo el personal esta a su disposicion dispuesto a atenderle con la mayor amabilidad,estamos agradecidos de su preferencia hacia nosotros queremos decearles muchos exitos.    <br>
      <a href="#" class="btn m1">Mas</a>
	 </div>
    </div>
	<div class="col-1-5"><div class="wrap-col"><!--empty--></div></div>
    <div class="col-2-5">
	<div class="wrap-col">
      <h2>EMPLEADOS DEL MES</h2>
      <ul class="testimo">
        <li>
          <blockquote>

            <?php require("conex.php");
            $re=mysql_query("SELECT * FROM personal WHERE personal.emplemes = 1 ORDER BY personal.paterno LIMIT 1");
            while($datos=mysql_fetch_array($re)) { echo"
            <img src='".$datos['foto']."' alt=''>
            <div class='extra_wrapper'>
              <div class='title'>".$datos['nombres']." ".$datos['paterno']." ".$datos['materno']."<br>El Empleado del Mes </div>
            </div>
            <div class='clear'></div>
            <p class='col1'><a href='#'>".$datos['nombres'].", desempeña el cargo de ".$datos['cargo'].", es el flamantes empleado del mes de enero, ya que con su ayuda de usted podemos elegir quien del nuestros empleados se quedara con un titulo de empleado del mes.</a></p>
            <p>Cada mes del Año se seleccionara una persona que trabaja en nuestras instalaciones ya sea en el area de ventsa mesero cocineros chef guardia . Se vera puntualidad,ropa adecuada,haceo y lo muy importante el trato a la clientela tambien habra queja en una caja que estara a su disposicion y podra anotar que iregularidades o disconformidad tuvo con la persona que lo atendio.</p>
            <p> Finalmente ya sabiendo quien es el Empleado del Mes el Gerente la dara una gratificacion por su esfuerzo tanto moral y un ragalo que solo al empleado s le otorgara dandole 1 dia de descanso que cualquier dia el quisiera.</p>"; } ?>

          </blockquote>
        </li>
      </ul>  
	</div>
    </div>
	</div>
    
	
    <div class="col-full">
      <div class="hor_separator hor1"></div>
      <h2 class="head1">Nuestros cocineros</h2>
    </div>
    <div class="clear"></div>
	
	<div class="row">
    <div class="chefs"><?php $re=mysql_query("SELECT * FROM personal WHERE personal.cargo = 'COCINERO' ORDER BY personal.paterno LIMIT 4");
          while($datos=mysql_fetch_array($re)) { echo"

      <div class='col-1-4'>
        <div class='wrap-col'>
          <img src='".$datos['foto']."' alt='' class='img_inner'
          <p class='col1'><a href='#'>".$datos['nombres']." ".$datos['paterno']." ".$datos['materno']."</a></p>
          <p class='text-justify'>".$datos['funcion']."</p>
        </div>
      </div>"; }?>
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
                   <li class="current" ><a href="index-1.php">PERSONAL</a></li>
                   <li><a href="index-2.php">MENU</a></li>
                   <li><a href="index-3.php">FOTOS</a></li>
                   <li><a href="index-4.php">NUEVOS </a></li>
                   <li><a href="index-5.php">CONTACTOS</a></li>
                 </ul></nav>
      </div>
      <div class="col-1-2">
        <h3>NUEVOS EVENTOS</h3>
        <p class="col1">Para ver mas hacerca de los eventos que se hara en los meses y novedades</p>
        <form id="nuevosletter">
                  <div class="success">aqui puedes sucribirte para pedir comida  a domicilio!</div>
                  <label class="email">
                       <input type="email" value="Enter e-mail address" >
                       <a href="#" class="btn" data-type="submit">subscribete</a> 
                        <span class="error">*Esto no es valido en E_m@il.</span>
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