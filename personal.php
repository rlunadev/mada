<?php
require("conex.php");
$formato = array('.jpg');
$nombreArchivo = $_FILES['archivo']['name'];
$nombreTmpArchivo = $_FILES['archivo']['tmp_name'];
$ext = substr($nombreArchivo, strrpos($nombreArchivo, '.'));
if (in_array($ext, $formato)){
	if(move_uploaded_file($nombreTmpArchivo, "images/personal/$nombreArchivo")){
		$rtOriginal="images/personal/$nombreArchivo";
		$original = imagecreatefromjpeg($rtOriginal);
		$max_ancho = 600;
		$max_alto = 337;
		list($ancho,$alto)=getimagesize($rtOriginal);
		$x_ratio = $max_ancho / $ancho;
		$y_ratio = $max_alto / $alto;

		if( ($ancho <= $max_ancho) && ($alto <= $max_alto) ){
			$ancho_final = $ancho;
			$alto_final = $alto;
		}
		elseif (($x_ratio * $alto) < $max_alto){
			$alto_final = ceil($x_ratio * $alto);
			$ancho_final = $max_ancho;
		}
		else{
			$ancho_final = ceil($y_ratio * $ancho);
			$alto_final = $max_alto;
		}

		$lienzo=imagecreatetruecolor($ancho_final,$alto_final);
		imagecopyresampled($lienzo,$original,0,0,0,0,$ancho_final, $alto_final,$ancho,$alto);
		imagedestroy($original);
		$cal=90;
		imagejpeg($lienzo,"images/personal/$nombreArchivo",$cal);
		$name=$_POST['nombres'];
		$pat=$_POST['paterno'];
		$mat=$_POST['materno'];
		$charge=$_POST['cargo'];
		echo"$charge";
		if ($charge == 1 ){
			$empleado ='COCINERO';
		}
		elseif ($charge == 2 ){
			$empleado ='MESERO';
		}
		elseif ($charge == 3 ){
			$empleado ='REPARTIDOR';
		}
		$function=$_POST['funcion'];
		$destino = "images/personal/$nombreArchivo";
		mysql_query("INSERT INTO personal (paterno, materno, nombres, foto, funcion, cargo) VALUES ('$pat', '$mat', '$name', '$destino', '$function', '$empleado')");
		echo "<script language='JavaScript' type='text/javascript'>
			document.write('Guardado exitosamente');
			alert('Empleado añadido satisfactoriamente');
			window.location='tasks.php';
		</script><?php";
	}
	else{?>
		<script language="JavaScript" type='text/javascript'>
			document.write("La imagen no es compatible");
			alert('Archivo con formato no compatible');
			window.location='tasks.php';
		</script><?php
	}
}
else{?>
	<script language="JavaScript" type='text/javascript'>
		document.write("Archivo no admitido");
		alert('Solo puede subir archivos con extensión jpg');
		window.location='tasks.php';
	</script><?php
}?>