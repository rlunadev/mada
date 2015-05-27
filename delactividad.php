<?php
require("conex.php");
$id = $_GET['id'];
mysql_query("DELETE FROM actividad WHERE id ='$id'");
echo "<script language='JavaScript' type='text/javascript'>
	document.write('Guardado exitosamente');
	alert('QUITADO DE LA CARTA');
	window.location='tasks.php';
</script>"
?>