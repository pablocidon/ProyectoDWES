<?php
$error="";
if(!isset($_SESSION['usuario'])){//Comprobamos que si no existe la sesion se redirige al index.php.  
    header("Location: index.php");        
}else{
    if(isset($_POST['enviar'])){
        if($_POST['enviar']=="Si"){
            if(!$_SESSION['usuario']->borrarUsuario()){
                unset($_SESSION['usuario']);  
                session_destroy();     
                header('Location: index.php');   
            }else{
                $error="No se ha podido eliminar el perfil";
                $_GET['pagina']="borrar";
                include_once 'view/layout.php';   
            }
            
        }else{
            header("Location: index.php?pagina=inicio"); 
        }
    }else{
        
    }
    $_GET["pagina"]="borrar"; 
    include_once 'view/layout.php';  
}
?>