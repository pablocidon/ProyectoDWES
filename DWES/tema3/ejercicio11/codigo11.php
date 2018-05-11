<!DOCTYPE html>

<html>
<head>
    <link rel="shortcut icon" href="../../webroot/img/favicon.ico" />
    <title>PCB-DAW</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../webroot/css/bootstrap.css">
    <link rel="stylesheet" href="../../webroot/css/bootstrap-theme.css">
    <link rel="stylesheet" href="../../webroot/css/estilos.css">
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
            <a href="../../index.html"><img src="../../webroot/img/logo.png" class="img-responsive logo"></a>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="../../../index.html"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
                <li><a href="../../../DAW/indexDAW.html"><span class="glyphicon glyphicon-link"></span> DAW</a></li>
                <li class="active"><a href="../../indexDWES.html"><span class="glyphicon glyphicon-link"></span> DWES</a></li>
                <li><a href="../../../DWEC/indexDWEC.html"><span class="glyphicon glyphicon-link"></span> DWEC</a></li>
                <li><a href="../../../DIW/indexDIW.html"><span class="glyphicon glyphicon-link"></span> DIW</a></li>
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
    <div class="row col-md-12 tecnologias">
        <?php
        show_source('index.html');
        ?>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <h2 class="text-center">DESARROLLO DE APLICACIONES WEB</h2>
            <h3 class="text-center">ENTORNO DE DESARROLLO</h3>
        </div>
        <hr>
        <div class="row col-md-12">
            <div class="col-md-10">
                <h4 class="text-center">© 2018 Copyright: Pablo Cidón Barrio</h4>
            </div>
            <div class="col-md-2">
                <a href="https://github.com/" target="_blank"><img src="../../webroot/img/github.png" alt="GitHub" title="Ver en GitHub" class="git"></a>
                <a href="http://daw-usgit.sauces.local/LRA_1718/ProyectoDWES" target="_blank"><img src="../../webroot/img/gitlab.png" alt="GitLab" title="Ver en GitLab" class="git"></a>
            </div>
        </div>
    </div>
</footer>
<!--ficheros js-->
<script src="../../webroot/js/jquery.js"></script>
<script src="../../webroot/js/bootstrap.min.js"></script>
</body>
</html>