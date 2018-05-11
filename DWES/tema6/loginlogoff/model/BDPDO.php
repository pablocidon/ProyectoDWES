<?php
/*
 * autor: Lucia Rodriguez Alvarez
 * fecha creacion: 2018-01-16
 * fecha ultima modificacion: 2018-01-16
 * nombre fichero: BDPDO.php  
 */
/**
 * File DBPDO.php
 * @author Lucia Rodriguez Alvarez
 *
 * Fichero que establece la conexión a la base de datos y ejecuta las consultas sobre la misma.
 */

/**
 * Class DBPDO
 * @author Lucia Rodriguez Alvarez
 *
 * Fecha última revisión 16-01-2018
 */

class Bdpdo{   
    /**
     * @param $consulta
     * @param $parametros
     * @return bool|null|PDOStatement
     */
    public static function ejecutarConsulta($consulta,$parametros){ //Funcion que utilizaremos para ejecutar las consultas
        try { 
            $conexion = new PDO(DATOSCONEXION, USER, PASSWORD); 
           // $conexion = new PDO('mysql:host=192.168.20.19;dbname=DAW208_DBDepartamentosMVC', 'DAW208', 'paso');//Configuracion para la conexion a la base de datos
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Creacion de la conexion a la base de datos
            $resultado = $conexion->prepare($consulta); //Consulta preparada
            $resultado->execute($parametros); 

        } catch (PDOException $exception) { 
            echo $exception->getMessage(); 
            $resultado=null; 
            unset($conexion); 
            exit; 
        } 
        return $resultado; 
    } 
} 
?>