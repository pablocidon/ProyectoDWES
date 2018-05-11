<?php
$entradaOk=true;
$error="";
$mensajeError="";
if(isset($_POST['enviar'])){ //si existe enviar enviamos el usuario y cotraseña introducidos
        $mensajeError["errorUsuario"]= validacionFormularios::comprobarAlfabetico($_POST['codUsuario'], 10, 1, 1);// comprobamos el campo nombre
        $mensajeError["errorPassword"]= validacionFormularios::comprobarAlfaNumerico($_POST['password'], 255, 4, 1); //comprobamos el campo fecha
        $mensajeError["errorDescripcion"]= validacionFormularios::comprobarAlfabetico($_POST['descripcion'], 255, 0, 1);// comprobamos el campo nombre
        if ($_POST['password']!=$_POST['repPassword']){ 
            $mensajeError["errorPasswordNoIgual"]="Las contraseñas tienen que ser iguales!";
        }
        if(Usuario::comprobarExisteUsuario($_POST['codUsuario'])){
            $mensajeError["errorUsuarioRepetido"]="El usuario ya existe";
        }
        foreach ($mensajeError as &$valor){ //recorremos los mensajes de error
            if ($valor!=null){ //si el mensaje de error NO esta vacio
                $entradaOk=false; // la variable de tratamiento de errores sera falsa y mostraremos los errores
            }
        }
}else{
    $_GET["pagina"] = "registrar";
    include_once "vista/layout.php";
}

if (isset($_POST['enviar']) && $entradaOk){  //si se ha pulsado registrar y todo esta bien
    //rellenamos las variables con lo que haya en los campos
    $codUsuario=$_POST['codUsuario']; 
    $password=hash('sha256',$_POST['password']);
    $descripcion=$_POST['descripcion'];


    $usuario=Usuario::registrarUsuario($codUsuario,$password,$descripcion); //creamos el usuario
    if (is_null($usuario)){
        header("Location: index.php?pagina=inicio"); 
    }else{ //si el usuario se ha registrado corrctamente iniciamos la sesion
        $_SESSION['usuario']=$usuario;
        $_SESSION['usuario']->UltimaConexionyAcceso();
        header("Location: index.php");
    } 
}

if (isset($_POST['volver'])){ 
    header("Location: index.php"); 
}else{
    require_once 'vista/layout.php';
}
$_GET["pagina"] = "registrar";
include_once "vista/layout.php";
?>