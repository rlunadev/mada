<?php
  session_start();
  unset ( $_SESSION['nick'] );
  session_unset();
  session_destroy();
 ?>
<script language="JavaScript" type='text/javascript'>
	document.write("¡Cierre de sesion!");
	alert('Ha terminado su sesion y está saliendo del administrador, hasta la próxima');
	window.location='index.php';
</script>
<?php require("pie.php"); ?>