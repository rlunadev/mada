<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>madagascar | administrador de contenidos</title>

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
<body>
  <center><legend><h1>ADMINISTRADOR DE CONTENIDOS</h1></legend><h3>Identifíquese</h3></center>
  <row class="row">
        <div class="container" id="login">
            <form action="login.php" method="POST" role="form">
                <div class="form-group">
                    <input type="text" class="form-control" name="nick" required="required" placeholder="Nick">
                    <br>
                    <input type="password" class="form-control" name="pass" required="required" placeholder="Contraseña">
                </div>
                <button type="submit" class="btn btn-primary pull-right">Entrar &raquo;</button>
            </form>
            <a class="btn btn-danger" href="sesionclose.php">CANCELAR</a>
        </div>
    </row>
</body>