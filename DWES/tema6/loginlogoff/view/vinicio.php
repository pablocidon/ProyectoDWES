<?php
    //require_once "../view/cabeceraEjercicios.php";
?>
<div class="container">
    <h2>LOGIN / LOGOFF</h2>
    <div class="row col-md-12 tecnologias">
        <form action="<?PHP echo $_SERVER['PHP_SELF']; ?>" method="post"> 
           <input type="submit" name="salir" class="btn btn-danger" value="salir"/>
           <a href="index.php?pagina=editar" class="btn btn-primary">editar</a>
           <a href="index.php?pagina=borrar" class="btn btn-warning">Borrar</a>
           
        </form>
<?php 
    echo "<h1>Welcome ",$_SESSION['usuario']->getCodUsuario(),"!</h1><br>"; 
    echo "<h1>El perfil de este usuario es ",$_SESSION['usuario']->getPerfil(),"</h1><br>"; 
    echo "<h1>Descripcion: ",$_SESSION['usuario']->getDescripcion(),"</h1><br>";
    echo "<h1>Ultima visita: ",$_SESSION['usuario']->getUltimaConexion(),"</h1><br>"; 
    echo "<h1>Numero de visitas: ",$_SESSION['usuario']->getNumeroAccesos(),"</h1><br>"; 
?>
    </div>
</div>
<?php
//require_once "../view/pie.php";
?>
