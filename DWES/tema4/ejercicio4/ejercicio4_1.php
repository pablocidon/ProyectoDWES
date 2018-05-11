<!DOCTYPE html>
<!--
    Autor: Pablo Cidón.
    Creado: 20-03-2018.
    Archivo: ejercicio4.php
    Ejercicio: Formulario para buscar un departamento.
-->
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
            <a href="../../../index.html"><img src="../../webroot/img/logo.png" class="img-responsive logo"></a>

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
    <h2>Ejercicio 4</h2>
    <div class="row col-md-12 tecnologias">
        <?php
        require_once '../../tema3/ejercicio19/validacionFormularios.php';
        include '../conexionDB.php';
        $correcto=true;
        $mensajeError;

        if (isset($_POST['buscar'])){
            $mensajeError["errorDescDepartamento"]= validacionFormularios::comprobarAlfaNumerico($_POST['DescDepartamento'], 255, 0, 0);
            foreach ($mensajeError as &$valor){
                if ($valor!=null){
                    $correcto=false;
                }
            }
        }
        if (!isset($_POST['buscar']) || !$correcto){
        ?>
        <form name="formulario" class="form-horizontal" action="<?PHP echo $_SERVER['PHP_SELF']; ?>" method="post">
            <fieldset>
                <br>
                <div class="form-group">
                    <label for="DescDepartamento" class="control-label col-md-2">Descripcion Departamento:</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="alfabetico" name="DescDepartamento"
                               placeholder="" <?php if (isset($_POST['DescDepartamento']) && empty($mensajeError['errorDescDepartamento'])) {
                            echo 'value="', $_POST['DescDepartamento'], '"';
                        } ?>>
                        <?php if (isset($mensajeError['errorDescDepartamento'])) {
                            echo '<span style="color:red">' . $mensajeError['errorDescDepartamento'] . '</span>';
                        } ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-2 col-md-offset-2">
                        <input type="submit" name="buscar" class="btn btn-primary" value="Buscar"/>
                    </div>
                </div>
            </fieldset>
        </form>
        <?php
            }else{
        try {
        $conexion = new PDO(DATOSCONEXION, USER, PASSWORD);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $consulta = $conexion->prepare("SELECT * FROM Departamento WHERE DescDepartamento LIKE concat('%',:DescDepartamento,'%')");
        $consulta->bindParam(':DescDepartamento', $_POST['DescDepartamento']);
        $consulta->execute();
        if ($resultado = $consulta->rowCount() == 0) {
            echo "<p>No se han obtenido resultados</p>";
        }else{
           echo "<table>
            <tr>
                <th>Codigo</th>
                <th>Descripcion</th>
            </tr>";
            while ($departamento = $consulta->fetch(PDO::FETCH_OBJ)){//mientras haya algun resultado se pasa a una variable y se muestra
                echo '<tr><td>'.$departamento->CodDepartamento.'</td>';//se muestran los valores
                echo '<td>'.$departamento->DescDepartamento.'</td></tr>';
            }
            echo '</table>';
        }

        }catch (PDOException $e){
            print $e -> getMessage();
            }finally{
                unset($conexion);
            }
        }
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