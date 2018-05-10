<!DOCTYPE html>
<!--
* Autor: Pablo Cidón.
* Archivo: layout.php
* Última revisión: 16-04-2018.
-->
<?php
    if (isset($_SESSION['usuario'])){
        $vista='vista/vinicio.php';
    }else{
        $vista='vista/vlogin.php';
    }

    if(isset($_GET['pagina'])){
        $vista=$vistas[$_GET['pagina']];
    } ?>
<html lang="es">
<head>
    <link rel="shortcut icon" href="webroot/img/favicon.ico" />
    <title>PCB-DAW</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="webroot/css/bootstrap.css">
    <link rel="stylesheet" href="webroot/css/mdb.css">
    <link rel="stylesheet" href="webroot/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark indigo">
    <a class="navbar-brand" href="#">
        <img src="webroot/img/logo.png" class="d-inline-block align-top animated bounce infinite">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="basicExampleNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php if (isset($_GET['pagina']) && $_GET['pagina']!="inicio" && $_GET['pagina']!="login"){ echo "index.php?pagina=wip&paginaAnterior=".$_GET['pagina']; }else { echo " index.php?pagina=wip "; } ?>">Estadísticas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="webroot/img/180503CatalogoDeRequisitos.pdf" target="_blank">Catálogo de Requisitos</a>
            </li>
            <?php
                if(isset($_SESSION['usuario']) && $_SESSION['usuario']->getPerfil()=='Usuario'){
            ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?numeroPagina=1&pagina=mantenimiento">Mantenimiento de departamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php if (isset($_GET['pagina']) && $_GET['pagina']!="inicio" && $_GET['pagina']!="login"){ echo "index.php?pagina=wip&paginaAnterior=".$_GET['pagina']; }else { echo " index.php?pagina=wip "; } ?>">Cuestionario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php if (isset($_GET['pagina']) && $_GET['pagina']!="inicio" && $_GET['pagina']!="login"){ echo "index.php?pagina=rest&paginaAnterior=".$_GET['pagina']; }else { echo " index.php?pagina=rest "; } ?>">Servicios REST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php if (isset($_GET['pagina']) && $_GET['pagina']!="inicio" && $_GET['pagina']!="login"){ echo "index.php?pagina=soap&paginaAnterior=".$_GET['pagina']; }else { echo " index.php?pagina=soap "; } ?>">Servicios SOAP</a>
                    </li>
            <?php
                }elseif(isset($_SESSION['usuario']) && $_SESSION['usuario']->getPerfil()=='Administrador'){
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php if (isset($_GET['pagina']) && $_GET['pagina']!="inicio" && $_GET['pagina']!="login"){ echo "index.php?pagina=wip&paginaAnterior=".$_GET['pagina']; }else { echo " index.php?pagina=wip "; } ?>">Mantenimiento de Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php if (isset($_GET['pagina']) && $_GET['pagina']!="inicio" && $_GET['pagina']!="login"){ echo "index.php?pagina=wip&paginaAnterior=".$_GET['pagina']; }else { echo " index.php?pagina=wip "; } ?>">Mantenimiento de cuestiones</a>
                    </li>
            <?php
            }
            ?>
        </ul>
        <div class="form-inline" style="margin-right: 5%">
            <ul class="navbar-nav mr-auto">
            <?php
                if(isset($_SESSION['usuario'])){
            ?>

                    <li class="nav-item dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> <?php echo $_SESSION['usuario']->getCodUsuario();?></a>
                        <form name="Formulario salida" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="index.php?pagina=editar"><span class="fa fa-cog"></span> Editar Perfil</a>
                                <a class="dropdown-item"href="index.php?pagina=borrar"><span class="fa fa-trash"></span> Borrar Cuenta</a>
                                <div class="dropdown-divider"></div>
                                <button type="submit" name="salir" class="btn btn-link"><span class="fa fa-sign-out"></span> Cerrar Sesión</button>
                            </div>
                        </form>
                    </li>

            </div>
            <?php
                }else{
                ?>
                    <li class="nav-item dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-sign-in"></i> Iniciar Sesión</a>
                            <div class="dropdown-menu" style="width: 150%">
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-horizontal" style="margin-left: 9%">
                                    <div class="form-group row" >
                                        <label for="usuario">Usuario</label>
                                        <input type="text" class="form-control" name="codUsuario" placeholder="Nombre de usuario">
                                    </div>
                                    <div class="form-group row">
                                        <label for="password">Contraseña</label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña">
                                    </div>
                                    <div class="form-group row">
                                        <?php echo "<span style='color:red;'>",$error,"</span>"; ?>
                                        <input class="btn blue-gradient btn-rounded" type="submit" name="enviar" value="Iniciar sesión">
                                    </div>
                                </form>
                            </div>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=registrar">Regístrate</a>
                </li>
            <?php
                }
                ?>
        </ul>


    </div>
    <!-- Collapsible content -->

</nav>

<div class="container-fluid tecnologias">
    <h1>ValdeKiru20</h1>
    <div class="row col-md-12" style="padding: 2%">
        <?php
        /**
         * Si se encuentra definida la página y la vista de esa página, cargaremos la vista de la misma,
         * de lo contrario mostraremos un mensaje de error.
         */
        /*if (isset($_GET['pagina']) && isset($vistas[$_GET["pagina"]])){
            require_once $vistas[$_GET["pagina"]];
        }else{
            echo "<p>Lo sentimos, hubo un error</p>";
        }*/  require_once $vista;
        ?>
    </div>
</div>
<footer class="page-footer font-small indigo pt-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-5 flex-center">
                    <a class="rss-ic" title="Ver RSS" href="<?php if (isset($_GET['pagina']) && $_GET['pagina']!="inicio" && $_GET['pagina']!="login"){ echo "index.php?pagina=wip&paginaAnterior=".$_GET['pagina']; }else { echo " index.php?pagina=wip "; } ?>">
                        <i class="fa fa-rss fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <a class="wrench-ic" title="Ver herramientas" href="<?php if (isset($_GET['pagina']) && $_GET['pagina']!="inicio" && $_GET['pagina']!="login"){ echo "index.php?pagina=tecnologias&paginaAnterior=".$_GET['pagina']; }else { echo " index.php?pagina=tecnologias "; } ?>">
                        <i class="fa fa-wrench fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <a class="book-ic" title="Acceso a PHPDoc" href="doc/index.html" target="_blank">
                        <i class="fa fa-book fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <a class="globe-ic" target="_blank" title="Web del autor" href="https://pablocidon.wordpress.com/" target="_blank">
                        <i class="fa fa-globe fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <a class="eye-ic" target="_blank" title="Ver web imitada" href="<?php if (isset($_GET['pagina']) && $_GET['pagina']!="inicio" && $_GET['pagina']!="login"){ echo "index.php?pagina=wip&paginaAnterior=".$_GET['pagina']; }else { echo " index.php?pagina=wip "; } ?>">
                        <i class="fa fa-eye fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <a href="https://github.com/pablocidon/ProyectoDWES" class="github-ic" target="_blank" title="Ver en GitHub">
                        <i class="fa fa-github fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <a href="http://DAW-USGIT.sauces.local/LRA_1718/ProyectoDWES2" class="gitlab-ic" target="_blank" title="Ver en GitLab">
                        <i class="fa fa-gitlab fa-lg white-text fa-2x"> </i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright py-3 text-center">
        © 2018 Copyright: Pablo Cidón, Alejandro Hernández, Lucía Rodríguez
    </div>
</footer>

<script src="webroot/js/jquery.js"></script>
<script src="webroot/js/bootstrap.js"></script>
<script src="webroot/js/mdb.js"></script>

</body>
</html>
