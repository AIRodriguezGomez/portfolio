<nav class="navbar navbar-expand-md mb-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link <?php echo($pg == "index")? "active": ""; ?> " aria-current="page" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo($pg == "sobre-mi")? "active": ""; ?>" href="sobre-mi.php">Sobre Mi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo($pg == "proyectos")? "active": ""; ?>" href="proyectos.php">Proyectos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo($pg == "contacto")? "active": ""; ?>" href="contacto.php">Contacto</a>
                </li>

            </ul>
            <a class="btn btn-rojo" href="contacto.html">Descargar mi CV <i
                                    class="fa-solid fa-download"></i></a>
        </div>
    </div>
</nav>