<?php
  $ruta      = "localhost";
  $login     = "root";
  $password  = "usbw";
  $db        = "madagascar";
  $conexion  = mysql_connect($ruta, $login, $password, $db) or die ("No se ha podido establecer la conexión");
  mysql_select_db ($db) or die ("La base de datos no existe");

  //$ruta mysql.hostinger.es
  //$login u751985343_adm
  //$password 63ux1mQ0XNHD4Q2siu
  //$db u751985343_cenjr
?>
