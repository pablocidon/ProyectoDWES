<script type="text/javascript" src="webroot/js/backtotop.js"></script>
<style type="text/css">
    pre{
        border-style: none;
        background-color: #f2f2f2;
    }
</style>
<br>
<nav class="navbar navbar-default">
    <ul class="nav navbar-nav">
        <li><a href="../indexTema6.php">Volver</a></li>

        <li><a href="#index">Index</a></li>
        <li><a href="#config">Config</a></li>

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Modelo
                <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="#DBPDO">DBPDO</a></li>
                <li><a href="#departamentoPDO">DepartamentoPDO</a></li>
                <li><a href="#departamento">Departamento</a></li>
                <li><a href="#usuarioPDO">UsuarioPDO</a></li>
                <li><a href="#usuario">Usuario</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Controlador
                <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="#cmantenimiento">CMantenimientoDepartamentos</a></li>
                <li><a href="#ccrear">CAltaDepartamentos</a></li>
                <li><a href="#celiminar">CEliminarDepartamentos</a></li>
                <li><a href="#cmodificar">CModificarDepartamentos</a></li>
                <li><a href="#ccopiaseguridad">CCopiaSeguridadDepartamentos</a></li>
                <li><a href="#clogin">CLogin</a></li>
                <li><a href="#cregistro">CRegistroUsuario</a></li>
                <li><a href="#cinicio">CInicio</a></li>
                <li><a href="#ceditar">CEditarPerfil</a></li>
                <li><a href="#cborrar">CBorrarPerfil</a></li>

            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Vista
                <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="#layout">layout</a></li>
                <li><a href="#vmantenimiento">VMantenimientoDepartamentos</a></li>
                <li><a href="#vcrear">VAltaDepartamentos</a></li>
                <li><a href="#veliminar">VEliminarDepartamentos</a></li>
                <li><a href="#vmodificar">VModificarDepartamentos</a></li>
                <li><a href="#vcopiaseguridad">VCopiaSeguridadDepartamentos</a></li>
                <li><a href="#vlogin">VLogin</a></li>
                <li><a href="#vregistro">VRegistroUsuario</a></li>
                <li><a href="#vinicio">VInicio</a></li>
                <li><a href="#veditar">VEditarPerfil</a></li>
                <li><a href="#vborrar">VBorrarPerfil</a></li>
            </ul>
        </li>
    </ul>
</nav>
<?php
/*
    * Autor: Pablo Cidón.
    * Creado: 24-01-2018.
    * Archivo: vcodigo.php
    * Modificado: 24-01-2018.
*/

echo "<div id='index'><h1>index.php</h1>";
show_source("index.php");
echo "</div>";

echo "<div id='config'><h1>config.php</h1>'";
show_source("config/config.php");
echo "</div>";
//Elementos del modelo
echo "<h1>Modelo</h1>";
echo "<div id='DBPDO'><h2>DBPDO.php</h2>";
show_source("modelo/DBPDO.php");
echo "</div>";

echo "<div id='departamentoPDO'><h2>DepartamentoPDO.php</h2>";
echo "<pre>";
show_source("modelo/DepartamentoPDO.php");
echo "</pre>";
echo "</div>";

echo "<div id='departamento'><h2>Departamento.php</h2>";
echo "<pre>";
show_source("modelo/Departamento.php");
echo "</pre>";
echo "</div>";

echo "<div id='usuarioPDO'><h2>usuarioPDO.php</h2>";
show_source("modelo/usuarioPDO.php");
echo "</div>";

echo "<div id='usuario'><h2>Usuario.php</h2>";
show_source("modelo/Usuario.php");
echo "</div>";
//Elementos del controlador
echo "<h1>Controlador</h1>";
echo "<div id='cmantenimiento'><h2>cMtoDepartamentos.php</h2>";
show_source("controlador/cMtoDepartamentos.php");
echo "</div>";

echo "<div id='ccrear'><h2>cAltaDepartamento.php</h2>";
show_source("controlador/cAltaDepartamento.php");
echo "</div>";

echo "<div id='celiminar'><h2>cEliminarDepartamento.php</h2>";
show_source("controlador/cEliminarDepartamento.php");
echo "</div>";

echo "<div id='cmodificar'><h2>cModificarDepartamento.php</h2>";
show_source("controlador/cModificarDepartamento.php");
echo "</div>";

echo "<div id='ccopiaseguridad'><h2>cCopiaSeguridad.php</h2>";
show_source("controlador/cCopiaSeguridad.php");
echo "</div>";
//controladores del login
echo "<div id='clogin'><h2>cLogin.php</h2>";
show_source("controlador/clogin.php");
echo "</div>";
echo "<div id='cregistro'><h2>cRegistro.php</h2>";
show_source("controlador/cregistro.php");
echo "</div>";
echo "<div id='cinicio'><h2>cInicio.php</h2>";
show_source("controlador/cinicio.php");
echo "</div>";
echo "<div id='ceditar'><h2>cEditar.php</h2>";
show_source("controlador/ceditar.php");
echo "</div>";
echo "<div id='cborrar'><h2>cBorrar.php</h2>";
show_source("controlador/cborrar.php");
echo "</div>";
//Elementos de la vista
echo "<h1>Vista</h1>";
echo "<div id='layout'><h2>layout.php</h2>";
show_source("vista/layout.php");
echo "</div>";
echo "<div id='vmantenimiento'><h2>vMtoDepartamentos.php</h2>'";
show_source("vista/vMtoDepartamentos.php");
echo "</div>";
echo "<div id='vcrear'><h2>vAltaDepartamento.php</h2>'";
show_source("vista/vAltaDepartamento.php");
echo "</div>";
echo "<div id='veliminar'><h2>vEliminarDepartamento.php</h2>'";
show_source("vista/vEliminarDepartamento.php");
echo "</div>";
echo "<div id='vmodificar'><h2>vModificarDepartamento.php</h2>'";
show_source("vista/vModificarDepartamento.php");
echo "</div>";
echo "<div id='vcopiaseguridad'><h2>vCopiaSeguridad.php</h2>'";
show_source("vista/vCopiaSeguridad.php");
echo "</div>";
//Vistas del login
echo "<div id='vlogin'><h2>vLogin.php</h2>";
show_source("vista/vlogin.php");
echo "</div>";
echo "<div id='vregistro'><h2>vRegistro.php</h2>";
show_source("vista/vregistro.php");
echo "</div>";
echo "<div id='vinicio'><h2>vInicio.php</h2>";
show_source("vista/vinicio.php");
echo "</div>";
echo "<div id='veditar'><h2>vEditar.php</h2>";
show_source("vista/veditar.php");
echo "</div>";
echo "<div id='vborrar'><h2>vBorrar.php</h2>";
show_source("vista/vborrar.php");
echo "</div>";

?>
<button onclick="topFunction()" id="myBtn" title="Go to top"><span class="glyphicon glyphicon-arrow-up"></span></button>

