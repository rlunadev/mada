<?php
require("conex.php");
	$id=$_GET['id'];
	mysql_query("UPDATE personal SET emplemes = 0");
	mysql_query("UPDATE personal SET emplemes = 1 WHERE personal.Id='$id'");
	echo "<script language='JavaScript' type='text/javascript'>
		document.write('Guardado exitosamente');
		alert('Empleado añadido satisfactoriamente');
		window.location='tasks.php';
	</script>";
?>