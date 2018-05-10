<?php
/**
 * File  cModificarDepartamento.php
 * @author Pablo Cidón.
 *
 * Fichero que contiene el controlador del modificado de los departamentos.
 * Fecha última revisión 16-04-2018
 */
$correcto = true;//Variable para controlar los errores.
$mensajeError = array(//Array que va a contener los mensajes de error-
    'errorDescDepartamento' => '',
    'errorVolumen'=>'',
    'errorModificar' => ''
);
if (!isset($_SESSION['usuario'])) { //Comprobamos si no existe la sesion
    header("Location: index.php"); //Si no existe nos manda registrarnos
} else {
    /**
     * Declaramos la variable departamento que va a contener los datos que nos devuelva la consulta.
     * En el enlace de acceso pasaremos como parámetro el código del departamento, que luego utilizaremos para la
     * búsqueda en la base de datos del mismo.
     */
    $departamento = Departamento::buscarDepartamentoPorCodigo($_GET['Departamento']);
    /**
     * En el caso de pulsar el botón de cancelar nos iremos a la página de inicio.
     */
    if (isset($_POST['cancelar'])) {
        header('Location: index.php?numeroPagina='.$_GET['numeroPagina'].'&pagina=mantenimiento');
    }
    /**
     * En el cason de que pulsemos el botón de editar, realizaremos la validación de los campos.
     */
    if (isset($_POST['editar'])) {
        $mensajeError['errorDescDepartamento'] = validacionFormularios::comprobarAlfabetico($_POST['DescDepartamento'], 100, 1, 1);
        $mensajeError['errorVolumen'] = validacionFormularios::comprobarFloat($_POST['Volumen'], 1);
        foreach ($mensajeError as $valor) {  //recorremos el array de errores
            if ($valor != null) {
                $correcto = false;
            }
        }
    }
    /**
     * En el caso de haber pulsado el botón de editar y no haya errores, comprobaremos que se ejecuta la consulta y si lo hace nos iremos a la página de inicio,
     * y si no se cargará un mensaje de error y se volverá a cargar la misma página.
     */
    if (isset($_POST['editar']) && $correcto) {
        if (Departamento::modificarDepartamento($_POST['DescDepartamento'], $_POST['Volumen'], $_POST['CodDepartamento'])) {
            header('Location: index.php?numeroPagina='.$_GET['numeroPagina'].'&pagina=mantenimiento');
        } else {
            $mensajeError['errorModificar'] = "Error al modificar el departamento";
            $_GET["pagina"] = "modificar";
            include_once "vista/layout.php";
        }
        /**
         * De no haber pulsado ninguno de los botones cargaremos la vista de modificar los departamentos y el layout.
         */
    } else {
        $_GET["pagina"] = "modificar";
        include_once "vista/layout.php";
    }
}
?>