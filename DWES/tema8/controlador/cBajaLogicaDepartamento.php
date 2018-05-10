<?php
/**
 * File  CBajaLogicaDepartamento.php
 * @author Pablo Cidón.
 *
 * Fichero que contiene el controlador del borrado de los departamentos.
 * Fecha última revisión 18-04-2018
 */
/**
 * Declaramos la variable departamento que va a contener los datos que nos devuelva la consulta.
 * En el enlace de acceso pasaremos como parámetro el código del departamento, que luego utilizaremos para la
 * búsqueda en la base de datos del mismo.
 */
$fechaBaja = '';
$departamento = Departamento::buscarDepartamentoPorCodigo($_GET['Departamento']);
/**
 * En el caso de que se haya pulsado el botón de no, volveremos a la página de inicio.
 */
if (!isset($_SESSION['usuario'])) { //Comprobamos si no existe la sesion
    header("Location: index.php"); //Si no existe nos manda registrarnos
} else {
    if (isset($_POST['no'])) {
        header('Location: index.php?numeroPagina='.$_GET['numeroPagina'].'&pagina=mantenimiento');
    }
    /**
     * En el caso de pulsar sí, comprobaremos que se ejecuta la consulta, y en el caso de que se ejecute la consulta
     * nos iremos a la página de inicio.
     * En el caso de no pulsar el sí, cargaremos la página de eliminar junto con el layout.
     */
    if (isset($_POST['si'])) {
        $fechaBaja = date("Y-m-d  H:i:s", $_SERVER['REQUEST_TIME']);
        if (Departamento::bajaLogicaDepartamento($fechaBaja,$_GET['Departamento'])) {
            header('Location: index.php?numeroPagina='.$_GET['numeroPagina'].'&pagina=mantenimiento');
        }
    } else {
        $_GET["pagina"] = "baja";
        include_once "vista/layout.php";
    }
}
?>