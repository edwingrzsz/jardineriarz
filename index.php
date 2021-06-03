<?php
session_start();
require_once('conexion_db.php');

if (isset($_SESSION['usuario'])) {
    header('Location: tienda.php');
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = sha1($_POST['password']);
    $resultado = $db->usuarios->findOne(array('username' => $username, 'password' => $password));
    if (!$resultado) {
    } else {
        $_SESSION['usuario'] = $resultado->_id;
        header('Location: tienda.php');
    }
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jardinería Ruiz</title>
    <meta name="author" content="Edwing Ruiz Sánchez">
    <meta name="description" content="Maqueta de un sitio web dedicado a la jardinería">
    <meta name="keywords" content="jardineria, plantas, jardin">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@300&display=swap" rel="stylesheet">
    <link href="css/estilo.css" type="text/css" rel="stylesheet" media="">
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container-fluid">

        <header>
            <div class="row p-5">

                <div id="logo" class="col-md-2">
                    <img src="img/Logo JRz.png">
                </div>

                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-0"></div>

                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">

                    <div class="row">

                        <div class="col-md-6">
                            <a style="padding-left: 60px;" href="#"><i class="fa fa-3x fa-facebook"></i></a>
                        </div>

                        <div class="col-md-6">
                            <a style="padding-left: 30px;" href="#"><i class="fa fa-3x fa-twitter"></i></a>
                        </div>

                        <form class="d-flex p-5">
                            <input class="form-control me-2" type="search" placeholder="" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Buscar</button>
                        </form>
                    </div>

                </div>
        </header>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(108, 194, 93);">
        <div class="container-fluid">
            <a class="navbar-brand text-white ps-5" href="admin_login.php">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp JRz</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item px-5">

                    </li>
                    <li class="nav-item px-5">

                    </li>

                    <li class="nav-item px-5">
                        <a class="nav-link active px-3 text-white" aria-current="page" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item dropdown px-5">
                        <a class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Cultivo y Cuidados</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Cómo cuidar las orquídeas</a></li>
                            <li><a class="dropdown-item" href="#">Cómo cuidar las hortencias</a></li>
                            <li><a class="dropdown-item" href="#">Cáscara de huevo para plantas</a></li>
                        </ul>
                    </li>
                    <li class="nav-item px-5">
                        <a class="nav-link active px-3 text-white" aria-current="page" href="plantas.php">Catálogo de plantas</a>
                    </li>
                    <li class="nav-item px-5">
                        <a class="nav-link active px-3 text-white" aria-current="page" href="jardin-herramientas.php">Muebles para jardín y herramientas</a>
                    </li>

                    <li class="nav-item px-5" id="quienes-somos">
                        <a class="nav-link active px-3 text-white" aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Quienes somos</a>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">¿Quienes Somos?... Jardinería Ruiz</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Somos una empresa mexicana con 5 años de experiencia que se dedica a la construcción, decoración y mantenimiento de la jardinería residencial, comercial, industrial y áreas deportivas, con personal experto y capacitado.

Nuestros principales servicios en toda la república mexicana están enfocados a construir, decorar y dar mantenimiento a jardines interiores o exteriores que junto con la construcción de cascadas, genera un toque de elegancia a tus instalaciones.

Trabajamos en casas y oficinas, contamos con otros servicios como el mantenimiento y la instalación de sistemas de riego por aspersión en áreas verdes de cualquier propiedad , clubes deportivos e industrias, así como la venta de insumos para la jardinería como fumigación, aplicación de fertilizantes y plantación de cualquier tipo de plantas y árboles, tierra para macetas, piedras de rio decorativa, etc.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item px-5" id="tienda">
                        <a class="nav-link active px-3 text-white" aria-current="page" href="tienda.php">Tienda</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <section id="section3" class="row">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        </div>

    </section>
    <section id="section" class="row">
        <aside class="col-lg-2 col-md-2 col-sm-2 col-xs-2 flex-fill">

            <div class="class-header pt-5">
                <p>Ingresar a la tienda</p>
            </div>

            <!-- <form method="post" onsubmit="return validarFormulario()" action="tienda.html"> -->
            <form method="post" action="index.php">
                <div class="mb-3 px-4">
                    <label for="username" class="form-label">Email:</label>
                    <input type="email" name="username" class="form-control" id="username" placeholder="Ingresa tu email">
                </div>
                <div class="mb-3 px-4">
                    <label for="password" class="form-label">Contraseña:</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Ingresa tu contraseña" required>
                </div>
                <button style="margin-left:115px" class="btn btn-success" type="submit">Enviar</button>
            </form>

            <div class="card" style="width: 20rem; margin-top:150px">
                <div class="card-body">
                    <h5 class="card-title">¿Eres nuevo aqui?</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Crea una cuenta... es grátis</h6>
                    <p class="card-text">Sólo da click aqui en el botón registarse.</p>
                    <a style="margin-left: 80px;" href="register.php" class="card-link btn btn-success">Registarse</a>
                </div>
            </div>

            <script src="js/val.js"></script>
        </aside>

        <article class="col-lg-8 col-md-8 col-sm-8 col-xs-8 flex-fill">


            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/img1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/img2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/img3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>





        </article>

        <aside class="col-lg-2">
            <!-- <iframe id="video"
                src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Fguiadejardineria%2Fvideos%2F418598132190206%2F&show_text=false&width=290"
                width="180" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                allowFullScreen="true"></iframe> -->
            <div>
                <iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7525.990401323296!2d-98.13806829701817!3d19.412599904476814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d02022e8841037%3A0x18046c103d5b818f!2sTerminal%20De%20Autobuses%20Atah!5e0!3m2!1ses-419!2smx!4v1612493923433!5m2!1ses-419!2smx" width="95%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

        </aside>
    </section>

    <div class="col-md-12">


    </div>

    <footer id="footer">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <p class="m-auto">Edwing Ruiz Sánchez 2021 Derechos Reservados &copy;</p>
        </div>
    </footer>

    <script>
        var myCarousel = document.querySelector('#myCarousel')
        var carousel = new bootstrap.Carousel(myCarousel)
    </script>

</body>

</html>