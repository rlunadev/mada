<?php require ("conex.php");
session_start();
$usuario = $_POST['nick'];
$password = $_POST['pass'];
$consulta = "SELECT * FROM usuario where usuario.nick = '$usuario' and  usuario.pass = '$password'";
$resultado = mysql_query ($consulta);
if (mysql_num_rows($resultado)>0) {
  session_start();
  $_SESSION['nick']=$usuario;
  $_SESSION['pass']=$password;
  header("Location: tasks.php");
}
else{?>
<script language="JavaScript" type='text/javascript'>
	document.write("¡Usuario desconocido!");
	alert('No se reconoce al usuario que intenta acceder al administrador <br> Por favor revise sus datos');
	window.location='admin.php';
</script>
<?php } ?>