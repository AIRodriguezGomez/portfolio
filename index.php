<?php

$pg = "index";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="inicio">
    <header class="container">

        <?php include_once("menu.php"); ?>

    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 mx-auto text-center cohete">
                <a href="proyectos.php"><img src="css/imgenes/cohete.svg" alt="cohete"></a>
            </div>
            <div class="col-12 col-sm-6 offset-sm-3 text-center">
                <div class="my-4">
                    <p class="px-5 py-2">Bienvenid@ a mi sitio web sobre desarrollo de sistemas.</p>
                </div>
            </div>
            <div class="col-12 text-center pt-3 pb-5">
                <a href="proyectos.php" class="btn shadow">Conoce mis proyectos</a>
            </div>
        </div>

    </main>
    <footer class="container mt-auto py-4">
        <div class="row">
            <div class="col-12 col-sm-3">
                <a href="https://github.com" target="_blank"><i class="fa-brands fa-github"></i></a>
                <a href="https://ar.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            </div>
            <div class="col-sm-3 col-12">
                Sponsor <a href="https://depcsuite.com">DePC Suite</a>
            </div>
            <div class="col-sm-3 col-12">
                <a href="mailto:isabella.photosss@gmail.com">isabella.photosss@gmail.com</a>
            </div>
        </div>

        <a href="https://web.whatsapp.com/"><i class="fa-brands fa-whatsapp px-3 pt-3 pb-4  "></i></a>

    </footer>
</body>

</html>