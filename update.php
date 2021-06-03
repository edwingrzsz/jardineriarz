<?php
include_once('conexion_db.php');

if (isset($_POST['usernameup']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $usernameup = $_POST['usernameup'];
    $password = sha1($_POST['password']);
    //$nuevosdatos = array('$set' => array('username'=>$usernameup, 'password'=>$password));
    $insertar = $db->usuarios->updateOne(['username'=>$username],['$set'=>['username'=>$usernameup, 'password'=>$password]]);
}  elseif (isset($_POST['usernameup']) ==="" && isset($_POST['password']) ===""){
    echo('<div class="alert alert-danger" role="alert"> No pueden estar vacios los campos! </div>');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/estilos_personalizados.css">
    <title>Actualizar Usuario JRz</title>
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid ">
    <a class="navbar-brand" href="#">Jardinería Ruiz</a>
  

<ul class="nav">
  <li class="nav-item">
  <form action="update.php" method="get">
<label for="username">Username</label>
<input type="email" name="username" id="username" >
<button id="editar" class="btn btn-success" type="submit">Editar</button>
</form>
  </li>
  <li class="nav-item">
  <form action="delete.php" method="get">
<label for="username">Username</label>
<input type="email" name="username" id="username">
<button class="btn btn-danger" type="submit">Eliminar</button>
</form>
  </li>
  <li class="nav-item">
  <a class="nav-link active" aria-current="page" href="logout.php">Salir</a>
  </li>
</ul>
</div>
</nav>
    <?php
    $editar = $db->usuarios->findOne(array('username'=>$_GET['username']));
    //print_r($editar)
?>

<div class="container">
<form action="" method="post">
<label for="username">Usuario Seleccionado</label>
<input type="text" readonly="true" name="username" id="username" value='<?php echo($_GET['username'])?>'>

<label for="usernameup">Actualizar usuario</label>
<input type="text" name="usernameup" id="usernameup">

<label for="password">Contraseña</label>
<input type="password" name="password" id="password" placeholder="Crea tu contraseña">
<button type="submit">Enviar</button>
</form>
</div>

</body>
</html>