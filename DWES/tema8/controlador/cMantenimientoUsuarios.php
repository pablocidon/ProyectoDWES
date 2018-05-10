<?php
/*
    * Autor: Lucía.
    * Creado: 08-05-2018.
    * Archivo: cMantenimientoUsuarios.php
    * Modificado: 09-05-2018.
*/
    $mensajeError;
    $cadenaBuscar;
    $correcto = true;
    $usuarios = '';
    $error = false;

    //Variables de la importación
    $numRegistros = 0;
    $codUsuario = "";
    $password="";
    $descUsuario = "";
    $perfil = "";
    $ultimaConexion="";
    $numeroAccesos="";
    $cantidadUsuarios = "";
    $numeroPaginas = "";
    $paginaActual = "";

    
if(!isset($_GET['numeroPagina'])){
    $_GET['numeroPagina'] = 1;
}
if (!isset($_SESSION['usuario'])) { //Comprobamos si no existe la sesion
    header("Location: index.php"); //Si no existe nos manda registrarnos
} else{
    if (isset($_POST['buscar'])){
        $mensajeError["errorDescUsuario"]= validacionFormularios::comprobarAlfaNumerico($_POST['DescUsuario'], 255, 0, 0);
        foreach ($mensajeError as &$valor){
            if ($valor!=null){
                $correcto=false;
            }
        }
        if($correcto){
            $_SESSION['criterioBusqueda'] = $_POST['DescUsuario'];
            $_GET['numeroPagina'] = 1;
            $usuarios = Usuario::buscarUsuarioDescripcion($_SESSION['criterioBusqueda'], $_GET['numeroPagina'],REGISTROSPAGINA);
            $cantidadUsuarios = Usuario::contarUsuariosPorDescripcion($_POST['DescUsuario']);
            $numeroPaginas = ceil($cantidadUsuarios/REGISTROSPAGINA);
        }
    }else{
        if(!isset($_SESSION['criterioBusqueda'])){
            $cadenaBuscar='';
        }else{
            $cadenaBuscar=$_SESSION['criterioBusqueda'];
        }
        $usuarios =  Usuario::buscarUsuarioDescripcion($cadenaBuscar, $_GET['numeroPagina'],REGISTROSPAGINA); 
        $cantidadUsuarios = Usuario::contarUsuariosPorDescripcion($cadenaBuscar);
        $numeroPaginas = ceil($cantidadUsuarios/REGISTROSPAGINA);
    }

    if(isset($_POST['importar'])){
        echo "<script>console.log('Importar');</script>";
        //echo $_FILES['fichero']['tmp_name'] = file_get_contents($_POST['fichero']);
        echo $xml_file = $_FILES['fichero']['tmp_name'];//Aparece el cuadro para seleccionar el documento
        if (file_exists($xml_file)) {//En caso de que exista el xml
            $xml = simplexml_load_file($xml_file);//Carga el archivo xml

            foreach ($xml->Usuario as $usuario) {
                $numRegistros++;//Contamos los registros
                $codUsuario = $usuario->CodUsuario;
                $password = hash('sha256',$usuario->Password);
                $descUsuario = $usuario->DescUsuario;
                $perfil = $usuario->Perfil;
                /*$ultimaConexion = $usuario->UltimaConexion;
                $numeroAccesos = $usuario->NumeroAccesos;*/
                try {
                    $consulta = Usuario::registrarUsuario($codUsuario,$password,$descUsuario);
                } catch (PDOException $PdoE) {//Error que va saltar
                    echo "<script>alert('El' $numRegistros 'º registro ha fallado');</script>";
                }
            }
        } else {//Por el contrario
            echo "<script>alert('Error al importar');</script>";
            $_GET["pagina"]="mantenimientoUsuarios";
            require_once 'vista/layout.php';
        }
    }
    $_GET["pagina"]="mantenimientoUsuarios";
    require_once 'vista/layout.php';
}

?>
