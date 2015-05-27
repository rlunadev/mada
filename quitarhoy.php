<?php
require("conex.php");
$id = $_GET['id'];
mysql_query("DELETE FROM menuhoy WHERE id ='$id'");
echo "<script language='JavaScript' type='text/javascript'>
	document.write('Guardado exitosamente');
	alert('QUITADO DEL MENU DE HOY');
	window.location='tasks.php';
</script>"
?>