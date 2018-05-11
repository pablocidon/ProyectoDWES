<?php
require_once "../../view/cabeceraEjercicios.php";
?>
<div class="container">
    <h2>Ejercicio 20</h2>
    <div class="row col-md-12 tecnologias">
        <?php
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $fechaNacimiento = $_POST['nacimiento'];
        $correo = $_POST['correo'];
        $mensaje = $_POST['mensaje'];
        $valoracion = $_POST['valoracion'];
        $redesSociales = $_POST['redsocial'];
        echo '<h3>Datos del usuario</h3>';
        echo '<b>Nombre: </b>'.$nombre.'<br>';
        echo '<b>Edad: </b>'.$edad.'<br>';
        echo '<b>Fecha de nacimiento: </b>'.$fechaNacimiento.'<br>';
        echo '<b>Correo: </b>'.$correo.'<br>';
        echo '<b>Mensaje: </b>'.$mensaje.'<br>';
        echo '<b>Valoracion: </b>'.$valoracion.'<br>';
        echo '<b>Redes sociales: </b>';
        foreach($redesSociales as $valor){
            echo $valor.' ';
        }

        ?>

    </div>
</div>
<?php
require_once "../../view/pie.php";
?>