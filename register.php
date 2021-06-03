<?php

require_once('conexion_db.php');

if (isset($_POST['username']) &&
    isset($_POST['password']) &&
    isset($_POST['rpassword']) &&
    isset($_POST['nombre']) &&
    isset($_POST['telefono'])
    ) {
    $username = $_POST['username'];
    $password = sha1($_POST['password']);
    $nombre = $_POST['nombre'];
    $rpassword = $_POST['rpassword'];
    $telefono = $_POST['telefono'];

    $insertar = $db->usuarios->insertOne(array('username' => $username,
                                               'password' => $password,
                                               'nombre' => $nombre,
                                               'telefono' => $telefono)
                                                );
} else {
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Registarse en JRz</title>
</head>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid ">
    <a class="navbar-brand" href="index.php">Jardinería Ruiz</a>
  </div>
</nav>
<body>

    <!-- <form action="" method="post">

        <label for="username">Usuario</label>
        <input type="text" name="username" id="username" placeholder="Crea tu nombre de usuario">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" placeholder="Crea tu contraseña">
        <button type="submit">Enviar</button>

    </form> -->
<div class="container my-5">


    <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-5 text-center">Crea tu cuenta aqui</h4>
            <p class="text-center">Para poder acceder a nuestra tienda debes tener una cuenta primero</p>

            <form action="" method="post">
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="nombre" class="form-control" placeholder="Nombre" type="text">
                </div> 
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input name="username" class="form-control" placeholder="email" type="email">
                </div> 
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                    </div>

                    <input name="telefono" class="form-control" placeholder="Número celular / fijo" type="text">
                </div> 


                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input name="password" class="form-control" placeholder="Crear contraseña" type="password">
                </div> 
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input name="rpassword" class="form-control" placeholder="Repite contraseña" type="password">
                </div> 
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block"> Crear Cuenta </button>
                </div> 
                <p class="text-center">Ya tienes cuenta? <a href="index.php">Ingresa...</a> </p>
            </form>
        </article>
    </div>
    </div>

</body>

</html>