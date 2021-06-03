<?php
require_once('conexion_db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/estilos_personalizados.css">
    <title>Admin JRz</title>
</head>
<body>

<?php

$usuarios = $db->usuarios->find();
$resultado_find = $usuarios->toArray();
//print_r($resultado_find);
?>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid ">
    <a class="navbar-brand" href="#">Jardinería Ruiz</a>
  

<ul class="nav">
  <li class="nav-item">
  <form action="update.php" method="get">
<label for="username">Username</label>
<input type="email" name="username" id="username" required="True">
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

<table class="table">
  <thead>
  <tr>
      <th scope="col">ID</th>
      <th scope="col">Username</th>
      <th scope="col">Contraseña</th>
      <th scope="col">Nombre</th>
      <th scope="col">Teléfono</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($resultado_find as $personas) : ?>
    <tr>
    <?php foreach($personas as $llave=>$persona):  ?>
        <td>
        <?php echo($persona); ?>
        </td>
        <?php endforeach; ?>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>


<!-- <div class="container">

  <div class="row">
  <h1>Editar usuario</h1>
    <div class="col-12">
    <form action="update.php" method="get">
<label for="username">Username</label>
<input type="email" name="username" id="username" required="True">
<button type="submit">Editar</button>
</form>
    </div>
    <h1>Eliminar usuario</h1>
    <div class="col-12">
     
<form action="delete.php" method="get">
<label for="username">Username</label>
<input type="email" name="username" id="username">
<button type="submit">Eliminar</button>
</form>
    </div>
  </div>
</div>
 -->



</body>
</html>