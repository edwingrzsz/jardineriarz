<?php
include_once('conexion_db.php');

if (isset($_POST['username'])){
    $username = $_GET['username'];
    $eliminar = $db->usuarios->deleteOne(['username'=>$username]);
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
    <title>Eliminar Usuario JRz</title>
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
    $eliminar = $db->usuarios->findOne(array('username'=>$_GET['username']));
    //print_r($eliminar)
?>

<div class=" container justify-content-center">
<form action="" method="post">
<label for="username">Usuario Selecionado</label>
<input style="width:250px" type="text" readonly="true" name="username" id="username" value='<?php echo($_GET['username'])?>'>

<button class="btn btn-danger" type="submit">Eliminar</button>
</form>
</div>

</body>
</html>