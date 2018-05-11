<?php
/*
 * autor: Lucia Rodriguez Alvarez
 * fecha creacion: 2018-01-16
 * fecha ultima modificacion: 2018-01-17
 * nombre fichero: UsuarioPDO.php  
 */

require_once 'DBPDO.php';

class UsuarioPDO{
     /**
     * Funcion para validar el usuario accediendo a la base de datos
     * @author : Lucia Rodríguez Álvarez
     * @param : string $codUsuario, string $password
     * @return array con los datos del Usuario
     **/
    public static function validarUsuario($codUsuario, $password) {
        $consulta= "SELECT * from Usuarios where CodUsuario='".$codUsuario."' and Password=SHA2('".$password."',256)"; //Creacion de la consulta para los usuarios
        $arrayUsuarios=[]; //Creacion del array de usuarios
        $resConsulta= DBPDO::ejecutaConsulta($consulta,[$codUsuario,$password]); //Ejecutamos la consulta
        if ($resConsulta->rowCount()==1){ //Comprobamos si se han obtenido resultados en la consulta
            $resFetch = $resConsulta->fetchObject(); 
            //Metemos los resultados de la consulta en el array
            $arrayUsuarios['perfil'] = $resFetch->Perfil; 
            $arrayUsuarios['descripcion'] = $resFetch->DescUsuario;
            $arrayUsuarios['ultimaConexion'] = $resFetch->UltimaConexion; 
            $arrayUsuarios['numVisitas'] = $resFetch->NumeroAccesos; 
        }
        return $arrayUsuarios;         
    }

    /**
     * Funcion para el resgistro de usuario desde la base de datos
     * @author : Lucia Rodríguez Álvarez
     * @param : string $codUsuario, string $password, strind $descripcion
     * @return boolean devuelve true si ha podido registrar y false en caso contrario
     **/
    public static function registrarUsuario($codUsuario, $password, $descripcion) {
        $registrado=false;
        $consulta="INSERT INTO Usuarios (CodUsuario,Password,Perfil,DescUsuario) VALUES (?,?,'Usuario',?)";
        $resConsulta= DBPDO::ejecutaConsulta($consulta,[$codUsuario,$password,$descripcion]);
        if ($resConsulta->rowCount()==1){
            $registrado=true;
        }
        return $registrado;
    }
    
    /**
     * Funcion para comprobar si el usuario ya esta registrado
     * @author : Lucia Rodríguez Álvarez
     * @param : string $codUsuario
     * @return boolean devuelve TRUE en caso de que el usuario exista y FALSE en caso de que no exista
     **/
    public static function comprobarExisteUsuario($codUsuario){
        $registrado=false;
        $consulta="Select * from Usuarios where CodUsuario=?";
        $resConsulta= DBPDO::ejecutaConsulta($consulta, [$codUsuario]);
        if ($resConsulta->rowCount()==1){
            $registrado=true;
        }
        return $registrado;
    }
    
    /**
     * Funcion para editar el perfil del usuario
     * @author : Lucia Rodríguez Álvarez
     * @param : string $codUsuario  string $password  string $descripcion
     * @return boolean devuelve false en caso de que no se haya podido editar el usuario y true en caso de que si se haya podido
    **/
    public static function editarUsuario($descripcion,$password,$codUsuario){
        $editado=false;
        $consulta="update Usuarios set DescUsuario=?,Password=? where CodUsuario=?";
        $resConsulta= DBPDO::ejecutaConsulta($consulta,[$descripcion,$password,$codUsuario]);
        if ($resConsulta->rowCount()==1){
            $editado=true;
        }
        return $editado;
    }
    
  
    /**
     * Funcion para actualizar la fecha y hora de ultima conexion
     * @author : Lucia Rodríguez Álvarez
     * @param : string $codUsuario  
     **/
     public static function UltimaConexion($codUsuario){
        $ultconex=date("Y-m-d  H:i:s",$_SERVER['REQUEST_TIME']);
        $consulta="Update Usuarios set UltimaConexion='".$ultconex."' where CodUsuario=?"; 
        DBPDO::ejecutaConsulta($consulta,[$codUsuario]);
    } 
    
     /**
     * Funcion para actualizar el numero de accesos
     * @author : Lucia Rodríguez Álvarez
     * @param : string $codUsuario  
     **/
    public static function AumentarAccesos($codUsuario){ 
        $consulta="Update Usuarios set NumeroAccesos=NumeroAccesos+1 where CodUsuario=?"; 
        DBPDO::ejecutaConsulta($consulta,[$codUsuario]);
    } 
    
    /**
     * Funcion para eliminar un usuario
     * @author : Lucia Rodríguez Álvarez
     * @param : string $codUsuario
     * @return boolean devuelve false en caso de que exista el usuario y pueda borrarse y false en caso contrario
     **/
    public static function eliminarUsuario($codUsuario){
        $eliminado=false;
        $consulta="delete from Usuarios where CodUsuario=?";
        DBPDO::ejecutaConsulta($consulta, [$codUsuario]);
        if (UsuarioPDO::comprobarExisteUsuario($codUsuario)){
            $eliminado=true;
        }
        return $eliminado;
    }


}

?>


