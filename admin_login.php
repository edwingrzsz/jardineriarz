<?php
require_once('conexion_db.php');
session_start();
if (!isset($_SESSION['usuario'])) {
   
}

//$usuarios = $db->usuarios->findOne(array(''));

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; //incluir despues sha
    $resultado = $db->admin->findOne(array('username' => $username, 'password' => $password));
    if (!$resultado) {
    } else {
        $_SESSION['usuario'] = $resultado->_id;
        header('Location: admin.php');
    }
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
    <title>Login Admin</title>
</head>
<body>

<nav class="navbar navbar-light bg-light">
  <div class="container-fluid ">
    <a class="navbar-brand" href="index.php">Jardinería Ruiz</a>
    <ul>
    
    <h1>Admin Dashboard</h1>
    
    </ul>
  </div>
</nav>


<form action="" method="post">
               
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input name="username" class="form-control" placeholder="email" type="email">
                </div> 
               


                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input name="password" class="form-control" placeholder="contraseña" type="password">
                </div> 
              
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block">Acceder</button>
                </div> 
               
            </form>
      
    
    </div>
    
</body>
</html>