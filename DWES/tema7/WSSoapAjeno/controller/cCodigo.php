<?php
if(isset($_POST['volver'])){
    header('Location: ../../indexTema7.php');
}else{
    $_GET['pagina']="codigo";
    require_once 'view/layout.php';
}
