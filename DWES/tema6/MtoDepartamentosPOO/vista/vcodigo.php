<script type="text/javascript" src="webroot/js/backtotop.js"></script>

<!--<nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
        <li><a href="#DBPDO">DBPDO</a></li>
        <li><a href="#departamentoPDO">DepartamentoPDO</a></li>
        <li><a href="#departamento">Departamento</a></li>
        <li><a href="#cinicio">cmantenimiento</a></li>
        <li><a href="#calta">calta</a></li>
        <li><a href="#cregistro">cregistro</a></li>
        <li><a href="#cmodificar">cmodificar</a></li>
        <li><a href="#index">index</a></li>
        <li><a href="#layout">layout</a></li>
        <li><a href="#vinicio">vmantenimiento</a></li>
        <li><a href="#vregistro">valta</a></li>
        <li><a href="#vmodificar">vmodificar</a></li>
        <li><a href="#config">config</a></li>
    </ul>
</nav>-->
<?php
/*
    * Autor: Pablo Cidón.
    * Creado: 24-01-2018.
    * Archivo: vcodigo.php
    * Modificado: 24-01-2018.
*/

echo "<div id='DBPDO'><h1>DBPDO.php</h1>";
show_source("modelo/DBPDO.php");
echo "</div>";

echo "<div id='departamentoPDO'><h1>DepartamentoPDO.php</h1>";
echo "<pre>";
show_source("modelo/DepartamentoPDO.php");
echo "</pre>";
echo "</div>";

echo "<div id='departamento'><h1>Departamento.php</h1>";
echo "<pre>";
show_source("modelo/Departamento.php");
echo "</pre>";
echo "</div>";

echo "<div id='cinicio'><h1>cMtoDepartamentos.php</h1>";
show_source("controlador/cMtoDepartamentos.php");
echo "</div>";

echo "<div id='calta'><h1>cAltaDepartamento.php</h1>";
show_source("controlador/cAltaDepartamento.php");
echo "</div>";

echo "<div id='cmodificar'><h1>cModificarDepartamento.php</h1>";
show_source("controlador/cModificarDepartamento.php");
echo "</div>";

echo "<div id='index'><h1>index.php</h1>";
show_source("index.php");
echo "</div>";

echo "<div id='layout'><h1>layout.php</h1>";
show_source("vista/layout.php");
echo "</div>";

echo "<div id='vinicio'><h1>vMtoDepartamentos.php</h1>'";
show_source("vista/vMtoDepartamentos.php");
echo "</div>";

echo "<div id='vregistro'><h1>vAltaDepartamento.php</h1>'";
show_source("vista/vAltaDepartamento.php");
echo "</div>";

echo "<div id='vmodificar'><h1>vModificarDepartamento.php</h1>'";
show_source("vista/vModificarDepartamento.php");
echo "</div>";

echo "<div id='config'><h1>config.php</h1>'";
show_source("config/config.php");
echo "</div>";
?>
<button onclick="topFunction()" id="myBtn" title="Go to top"><span class="glyphicon glyphicon-arrow-up"></span></button>

