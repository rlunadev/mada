<?php
require("conex.php");
$id=$_GET['id'];
$nombre=$_GET['plato'];
$description=$_GET['descrip'];
$price=$_GET['precio'];
mysql_query("UPDATE carta SET nombre = '$nombre', descripcion = '$description', precio = '$price' WHERE Id = '$id')"); ?>