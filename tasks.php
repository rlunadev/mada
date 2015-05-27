<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MADAGASCAR ADMIN</title>

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<header>
  
</header>
<?php require ("conex.php");
session_start();
$usuario=$_SESSION['nick'];
$pass=$_SESSION['pass'];
$consulta = "SELECT * FROM usuario where usuario.nick = '$usuario' and  usuario.pass = '$pass'";
$resultado = mysql_query ($consulta);
if (mysql_num_rows($resultado)>0) { ?>
    <body class="container">
        <legend>ADMINISTRAR CONTENIDO</legend>
        <div class="col-md-2">
            
        </div>
        <div class="col-md-10">
            <div class="tabbable tabs-left">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#1" data-toggle="tab">CARTA</a></li>
                    <li><a href="#2" data-toggle="tab">PERSONAL</a></li>
                    <li><a href="#3" data-toggle="tab">ACTIVIDADES</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="1">
                        
                        <div class="tabbable tabs-below">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#C1" data-toggle="tab">INGRESAR</a></li>
                                <li><a href="#C2" data-toggle="tab">MENU DEL DIA</a></li>
                                <li><a href="#C3" data-toggle="tab">ELIMINAR PLATILLOS</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="C1">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                           <form action="carta.php" method="POST" role="form" enctype="multipart/form-data">
                                            <legend>INGRESAR NUEVO PLATO A LA CARTA</legend>
                                            <row class="row form-inline">
                                              <span class="label label-info">NOMBRE:</span>
                                              <input type="text" name="nombre" class="form-control" required="required" required="required">
                                              <span class="label label-info">PRECIO:</span>
                                              <input type="text" name="precio" class="form-control" required="required" required="required">
                                            </row>
                                            <row class="row">
                                              <textarea name="descrip" class="form-control" cols="30" rows="4"></textarea>
                                            </row>
                                            <row class="row">
                                              <div class="form-inline">
                                                <span class="label label-info">FOTOGRAFÍA</span>
                                                <input name="archivo" type="file" class="btn btn-default">
                                                <button type="submit" class="btn btn-primary pull-right">GUARDAR</button>
                                              </div>
                                            </row>
                                          </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="C2">
                                  <div class="panel panel-success">
                                      <div class="panel-heading">
                                        <h3 class="panel-title">MENU DE HOY</h3>
                                      </div>
                                      <div class="panel-body">
                                        <table class="table table-condensed table-hover">
                                          <thead>
                                            <tr>
                                              <th>NOMBRE</th>
                                              <th>PRECIO</th>
                                              <th>DESCRIPCION</th>
                                              <th>FOTO</th>
                                              <th>TAREAS</th>
                                            </tr>
                                          </thead>
                                          <tbody><?php $re=mysql_query("SELECT * FROM carta INNER JOIN menuhoy ON carta.id = menuhoy.idPlato");
                                            while($datos=mysql_fetch_array($re)) { echo"
                                            <tr>
                                              <td>".$datos['nombre']."</td>
                                              <td>".$datos['precio']."</td>
                                              <td>".$datos['descripcion']."</td>
                                              <td><img src='".$datos['foto']."' class='img-responsive' alt='restaurant'></td>
                                              <td><a href='quitarhoy.php?id=".$datos['Id']."'>QUITAR</a></td>
                                            </tr>"; } ?>
                                          </tbody>
                                        </table>
                                      </div>
                                  </div><hr>
                                  <legend><center>PLATILLOS</center></legend>
                                  <div class="panel panel-default">
                                    <div class="panel-body">
                                      <table class="table table-striped table-hover">
                                       <thead>
                                        <tr>
                                          <th>NOMBRE</th>
                                          <th>DESCRIPCION</th>
                                          <th>PRECIO</th>
                                          <th>FOTO</th>
                                          <th>TAREAS</th>
                                        </tr>
                                      </thead>
                                      <tbody><?php $re=mysql_query("SELECT * FROM carta ORDER BY carta.nombre");
                                        while($datos=mysql_fetch_array($re)) { echo"
                                        <tr>
                                          <td>".$datos['nombre']."</td>
                                          <td>".$datos['descripcion']."</td>
                                          <td>".$datos['precio']."</td>
                                          <td><img src='".$datos['foto']."' class='img-responsive' alt='restaurant'></td>
                                          <td><a href='hoy.php?id=".$datos['Id']."'>AGREGAR</a></td>
                                        </tr>"; } ?>
                                      </tbody>
                                     </table>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane" id="C3">
                                  <table class="table table-bordered table-hover">
                                    <thead>
                                      <tr>
                                        <th>NOMBRE</th>
                                        <th>DESCRIPCION</th>
                                        <th>PRECIO</th>
                                        <th>FOTO</th>
                                        <th>TAREAS</th>
                                      </tr>
                                    </thead>
                                    <tbody><?php $re=mysql_query("SELECT * FROM carta ORDER BY carta.id");
                                      while($datos=mysql_fetch_array($re)) { echo"
                                      <tr>
                                        <td>".$datos['nombre']."</td>
                                        <td>".$datos['descripcion']."</td>
                                        <td>".$datos['precio']."</td>
                                        <td><img src='".$datos['foto']."'  class='img-responsive' alt=''></td>
                                        <td><center><a class='btn btn-danger' href='delcarta.php?id=".$datos['Id']."'>Eliminar</a></center></td>
                                      </tr>"; } ?>
                                    </tbody>
                                  </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane" id="2">
                        <div class="tabbable tabs-below">
                          <ul class="nav nav-tabs">
                            <li class="active"><a href="#P1" data-toggle="tab">REGISTRO DE PERSONAL</a></li>
                            <li><a href="#P2" data-toggle="tab">EMPLEADO DEL MES</a></li>
                          </ul>
                          <div class="tab-content">
                            <div class="tab-pane active" id="P1">
                              <div class="panel panel-default">
                                <div class="panel-body">
                                   <form action="personal.php" method="POST" role="form" enctype="multipart/form-data">
                                    <legend>REGISTRO DE PERSONAL</legend>
                                    <row class="row">
                                      <div class="col-md-4">
                                        <div class="form-group">
                                          <input type="text" class="form-control" name="paterno" placeholder="Paterno">
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="form-group">
                                          <input type="text" class="form-control" name="materno" placeholder="Materno">
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="form-group">
                                          <input type="text" class="form-control" name="nombres" placeholder="Nombres">
                                        </div>
                                      </div>
                                    </row>
                                    <div class="form-inline">
                                      <span class="label label-success">CARGO: </span>
                                      <div class="form-group">
                                        <div class="col-md-6">
                                          <select name="cargo" id="inputCargo" class="form-control" required="required">
                                            <option value="1">COCINERO</option>
                                            <option value="2">MESERO</option>
                                            <option value="3">REPARTIDOR</option>
                                          </select>
                                        </div>
                                      </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                      <textarea name="funcion" class="form-control" cols="30" rows="4"></textarea>
                                    </div>
                                    <row class="row">
                                      <span class="label label-info">FOTOGRAFÍA</span>
                                      <input name="archivo" type="file" class="btn btn-default">
                                    </row>
                                    <button type="submit" class="btn btn-primary pull-right">AGREGAR</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="P2">
                              
                              <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>PATERNO</th>
                                      <th>MATERNO</th>
                                      <th>NOMBRES</th>
                                      <th>CARGO</th>
                                      <th>FOTO</th>
                                      <th>NOMBRAR</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php $re=mysql_query("SELECT * FROM personal ORDER BY personal.paterno");
                                        while($datos=mysql_fetch_array($re)) { echo"
                                    <tr>
                                      <td>".$datos['paterno']."</td>
                                      <td>".$datos['materno']."</td>
                                      <td>".$datos['nombres']."</td>
                                      <td>".$datos['cargo']."</td>
                                      <td><img src='".$datos['foto']."' class='img-responsive' alt='".$datos['paterno']."'></td>
                                      <td><a href='nombrar.php?id=".$datos['Id']."'>EMPLEADO DEL MES</a></td>
                                    </tr>"; } ?>
                                  </tbody>
                                </table>
                              </div>

                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="3">
                      
                      <div class="tabbable tabs-below">
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#A1" data-toggle="tab">AGREGAR ACTIVIDAD</a></li>
                          <li><a href="#A2" data-toggle="tab">ELIMINAR</a></li>
                        </ul>
                        <div class="tab-content">
                          <div class="tab-pane active" id="A1">
                            <row class="row">
                              <div class="panel panel-default">
                                <div class="panel-body">
                                   <form action="actividad.php" class="form-inline" method="POST" role="form" enctype="multipart/form-data">
                                     <legend>AGREGAR ACTIVIDAD</legend>
                                     <row class="row"><input type="text" name="nombre" id="inputNombre" class="form-control" required="required" placeholder="ACTIVIDAD">
                                       <span class="label label-info">FECHA:</span>
                                       <input type="date" name="fecha" id="inputFecha" class="form-control" required="required">
                                     </row>
                                     <row class="row"><input name="archivo" type="file" class="btn btn-default"></row>
                                     <button type="submit" class="btn btn-primary pull-right">GUARDAR</button>
                                   </form>
                                 </div>
                              </div>
                            </row>
                          </div>
                          <div class="tab-pane" id="A2">
                            <row class="row">
                              <div class="panel panel-default">
                                <div class="panel-body">
                                   <div class="table-responsive">
                                     <table class="table table-hover">
                                       <thead>
                                         <tr>
                                           <th style="width: 100px;">FECHA</th>
                                           <th style="width: 350px;">ACTIVIDAD REALIZADA</th>
                                           <th>FOTOGRAFÍA</th>
                                           <th>TAREA</th>
                                         </tr>
                                       </thead>
                                       <tbody><?php $re=mysql_query("SELECT * FROM actividad ORDER BY actividad.fecha DESC");
                                        while($datos=mysql_fetch_array($re)) { echo"
                                         <tr>
                                           <td>".$datos['fecha']."</td>
                                           <td>".$datos['nombre']."</td>
                                           <td><img src='".$datos['foto']."' class='img-responsive' alt='".$datos['nombre']."'></td>
                                           <td><a class='btn btn-danger' href='delactividad.php?id=".$datos['Id']."'>ELIMINAR &raquo;</a></td>
                                         </tr>"; } ?>
                                       </tbody>                                       
                                     </table>
                                   </div>
                                </div>
                              </div>
                            </row>
                          </div>
                        </div>
                      </div>

                    </div>
                </div>
            </div>
        </div>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
<?php }
else{ echo "

    <script language='JavaScript' type='text/javascript'>
        document.write('Acceso denegado!');
        alert('Para acceder a la administración del contenido de la página, debe ser usuario registrado');
        window.location='admin.php';
    </script>
    ";
}
?>