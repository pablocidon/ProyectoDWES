<!DOCTYPE html>

<html lang="es">
<head>
    <link rel="shortcut icon" href="webroot/img/favicon.ico" />
    <title>PCB-DAW</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="webroot/css/bootstrap.css">
    <link rel="stylesheet" href="webroot/css/bootstrap-theme.css">
    <link rel="stylesheet" href="webroot/css/estilos.css">
</head>

<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="../../"><img src="webroot/img/logo.png" class="img-responsive logo"></a>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
                <li><a href="DAW/indexDAW.php"><span class="glyphicon glyphicon-link"></span> DAW</a></li>
                <li><a href="DWES/indexDWES.php"><span class="glyphicon glyphicon-link"></span> DWES</a></li>
                <li><a href="DWEC/indexDWEC.php"><span class="glyphicon glyphicon-link"></span> DWEC</a></li>
                <li><a href="DIW/indexDIW.php"><span class="glyphicon glyphicon-link"></span> DIW</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-globe"></span> Enlaces de interés<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="https://www.w3schools.com/html/html5_intro.asp" target="_blank">HTML W3Schools</a></li>
                        <li><a href="https://www.w3schools.com/css/" target="_blank">CSS W3Schools</a></li>
                        <li><a href="http://php.net/" target="_blank">php.net</a></li>
                        <li><a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank">JavaScript MDN</a></li>
                        <li><a href="https://www.w3schools.com/js/default.asp" target="_blank">JavaScript W3Schools</a></li>
                        <li><a href="https://www.w3schools.com/bootstrap/" target="_blank">Bootstrap W3Schools</a></li>
                        <li><a href="https://getbootstrap.com/" target="_blank">getbootstrap.com</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row col-md-12">
        <h1>Lenguajes y herramientas utilizadas</h1>
    </div>
    <div class="row col-md-12">
        <div class="col-md-4 tecnologias">
            <figure>
                <img src="webroot/img/html5.png" class="img-responsive" alt="">
                <figcaption>Versión 5 del lenguaje HTML</figcaption>
            </figure>

        </div>
        <div class="col-md-3 tecnologias">
            <figure>
                <img src="webroot/img/css3.png" class="img-responsive" alt="">
                <figcaption>Version 3 de los estilos CSS</figcaption>
            </figure>
        </div>
        <div class="col-md-4 tecnologias">
            <figure>
                <img src="webroot/img/javascript.png" class="img-responsive" alt="">
                <figcaption>Lenguaje de programación del lado del cliente</figcaption>
            </figure>
        </div>
    </div>
    <div class="row col-md-12">
        <div class="col-md-4 tecnologias">
            <figure>
                <img src="webroot/img/php.png" class="img-responsive" alt="">
                <figcaption>Lenguaje de programación del lado del servidor</figcaption>
            </figure>
        </div>
        <div class="col-md-3 tecnologias">
            <figure>
                <img src="webroot/img/mysql.png" class="img-responsive" alt="">
                <figcaption>Sistema gestor de base de datos</figcaption>
            </figure>
        </div>
        <div class="col-md-4 tecnologias">
            <figure>
                <img src="webroot/img/git.png" class="img-responsive" alt="">
                <figcaption>Almacenamiento de código en repositorios git</figcaption>
            </figure>
        </div>
    </div>
    <div class="row col-md-12">
        <div class="col-md-4 tecnologias">
            <figure>
                <img src="webroot/img/bootstrap.png" class="img-responsive" alt="">
                <figcaption>Framework para la realización de diseños web</figcaption>
            </figure>
        </div>
        <div class="col-md-3 tecnologias">
            <figure>
                <img src="webroot/img/webstorm.png" class="img-responsive" alt="">
                <figcaption>IDE para el desarrollo en JavaScript</figcaption>
            </figure>

        </div>
        <div class="col-md-4 tecnologias">
            <figure>
                <img src="webroot/img/phpstorm.png" class="img-responsive" alt="">
                <figcaption>IDE para la programación en PHP</figcaption>
            </figure>

        </div>
    </div>
</div>
<?php
echo "Mensaje de Pablo";
require_once "view/pie.php";
?>
