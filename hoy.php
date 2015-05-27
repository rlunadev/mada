<?php
require("conex.php");
$id = $_GET['id'];
mysql_query("INSERT INTO menuhoy (idPlato) VALUES ('$id')");
echo "<script language='JavaScript' type='text/javascript'>
	document.write('Guardado exitosamente');
	alert('AGREGADO AL MENU DE HOY');
	window.location='tasks.php';
</script>"
?>