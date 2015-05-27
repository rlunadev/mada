<?php
require("conex.php");
$formato = array('.jpg');
$nombreArchivo = $_FILES['archivo']['name'];
$nombreTmpArchivo = $_FILES['archivo']['tmp_name'];
$ext = substr($nombreArchivo, strrpos($nombreArchivo, '.'));
if (in_array($ext, $formato)){
	if(move_uploaded_file($nombreTmpArchivo, "images/actividades/$nombreArchivo")){
		$rtOriginal="images/actividades/$nombreArchivo";
		$original = imagecreatefromjpeg($rtOriginal);
		$max_ancho = 1366;
		$max_alto = 768;
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
		imagejpeg($lienzo,"images/actividades/$nombreArchivo",$cal);
		$name=$_POST['nombre'];
		$date=$_POST['fecha'];
		$destino = "images/actividades/$nombreArchivo";
		mysql_query("INSERT INTO actividad (nombre, fecha, foto) VALUES ('$name', '$date', '$destino')");
		echo "<script language='JavaScript' type='text/javascript'>
			document.write('Guardado exitosamente');
			alert('Actividad añadida satisfactoriamente');
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