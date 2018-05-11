<?php
    if (isset($_SESSION['usuario'])){
        $vista='view/vinicio.php';
    }else{
        $vista='view/vlogin.php';
    }

    if(isset($_GET['pagina'])){
        $vista=$aVistas[$_GET['pagina']];
    }
    
    require_once "../../view/cabeceraEjercicios.php";
?>
<!--<div class="container">-->
    <!--<div class="row col-md-12 tecnologias">-->
        <?php require_once $vista;?> 
    <!--</div>-->
<!--</div>-->
<?php
    require_once "../../view/pie.php";
?>