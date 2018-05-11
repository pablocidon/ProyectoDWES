<?php
require_once 'usuarioPDO.php';

/**
 * File Departamento.php
 * @author Lucia Rodriguez Alvarez
 *
 * Fichero del modelo que crea los objetos de la clase usuario y usa sus métodos
 */

/**
 * Class Usuario
 * @author Lucia Rodriguez Alvarez
 *
 * Fecha última revisión 18-04-2018
 */


class Usuario{
    //Definimos los atributos del objeto
    /**
     * @var string $codUsuario     Código del usuario.
     */
    private $codUsuario;
    
    /**
     * @var string $descripcion     Descripción del usuario.
     */
    private $descripcion;
    
    /**
     * @var string $password     Descripción del usuario.
     */
    private $password;
    private $perfil;
    private $ultimaConexion;
    private $numVisitas;
   
    //Definimos el constructor del objeto
    function __construct($codUsuario, $descripcion, $password, $perfil,$ultimaConexion,$numVisitas) {
        $this->CodUsuario = $codUsuario;
        $this->DescUsuario = $descripcion;
        $this->Password = $password;
        $this->Perfil = $perfil;
        $this->UltimaConexion=$ultimaConexion;
        $this->NumeroAccesos=$numVisitas;
    }
    
    /**
     * Funcion para validar el usuario, 
     * @author : Lucia Rodríguez Álvarez
     * @param : string $codUsuario, string $password
     * @return object Usuario
     **/
    public static function validarUsuario($codUsuario,$password){
        $usuario=null;
        $arrayUsuario=UsuarioPDO::validarUsuario($codUsuario,$password); 
        if(!empty($arrayUsuario)) { 
            $usuario = new Usuario($codUsuario, $arrayUsuario['descripcion'], $password, $arrayUsuario['perfil'], $arrayUsuario['ultimaConexion'],$arrayUsuario['numVisitas']); 
        } 
        return $usuario; 
    }
    
    
    /**
     * Funcion para el resgistro de usuario
     * @author : Lucia Rodríguez Álvarez
     * @param : string $codUsuario, string $password, string $descripcion
     * @return object Usuario
     **/
    public static function registrarUsuario($codUsuario,$password,$descripcion){
       // $ultconex=date("Y-m-d  H:i:s",$_SERVER['REQUEST_TIME']);
         $usuario=null;
         if(UsuarioPDO::registrarUsuario($codUsuario,$password,$descripcion)){
            $usuario=new Usuario($codUsuario,$descripcion,$password,"Usuario",null,0);
         }
         return $usuario;
    }
    
    /**
     * Funcion que comprueba si existe el usuario
     * @author : Lucia Rodríguez Álvarez
     * @param : string $codUsuario, string $password
     * @return object Usuario
     **/
    public static function comprobarExisteUsuario($codUsuario){
       
        return UsuarioPDO::comprobarExisteUsuario($codUsuario);

    }
    
    /**
     * Funcion editar los datos de un usuario
     * @author : Lucia Rodríguez Álvarez
     * @param : string $password, string $descripcion
     * @return boolean true en caso de que se edite y false en caso contrario
     **/
    public function editarUsuario($descripcion, $password){ 
        $correcto=false; 
        $codUsuario=$this->getCodUsuario(); 
        if(empty($password)){ //Si no se ha puesto contraseña se guarda la que ya esta
            $password=hash('sha256',$this->getPassword()); 
        } 
        if(UsuarioPDO::editarUsuario($descripcion,$password,$codUsuario)){ 
            $this->setDescripcion($descUsuario); 
            $this->setPassword($password); 
            $correcto=true; 
        } 
        return $correcto; 
    }
    
    /**
     * Funcion que actualiza el numero de accesos
     * @author : Lucia Rodríguez Álvarez
     * @param : string $codUsuario
     * @return object Usuario
     **/   
   /* public static function actualizarAccesos($codUsuario){
        return UsuarioPDO::actualizarAccesos($codUsuario);
    }*/
    
    /**
     * Funcion que actualiza el numero de accesos y la fecha de ultima conexion
     * @author : Lucia Rodríguez Álvarez
     **/
    public function UltimaConexionyAcceso(){ 
        UsuarioPDO::UltimaConexion($this->CodUsuario); 
        UsuarioPDO::AumentarAccesos($this->CodUsuario); 
    }
    
    /**
     * Funcion que permite borrar los datos de un usuario
     * @author : Lucia Rodríguez Álvarez
     **/
     public function borrarUsuario(){ 
        $correcto=false; 
        $codUsuario=$this->getCodUsuario(); 
        if (UsuarioPDO::eliminarUsuario($codUsuario)){ 
            $correcto=true; 
        } 
        return $correcto; 
    } 

    public function getDescripcion() {
        return $this->DescUsuario;
    }

    public function getPassword() {
        return $this->Password;
    }

    
    public function getCodUsuario() {
       return $this->CodUsuario;
   }

   /* public function getDescripcion() {
       return $this->descripcion;
   }

    public function getPassword() {
       return $this->password;
   }*/

    public function getPerfil() {
       return $this->Perfil;
   }
   
   public function getUltimaConexion() {
       return $this->UltimaConexion;
   }
   
   public function setUltimaConexion($ultimaConexion){ 
        $this->UltimaConexion = $ultimaConexion; 
    } 
   
   public function getNumeroAccesos() {
       return $this->NumeroAccesos+1;
   }
   
   public function setNumeroAccesos($numVisitas){ 
        $this->NumeroAccesos = $numVisitas; 
    } 
  
    function setCodUsuario($codUsuario) {
        $this->CodUsuario = $codUsuario;
    }

    function setDescripcion($descripcion) {
        $this->DescUsuario = $descripcion;
    }

    function setPassword($password) {
        $this->Password = $password;
    }

    function setPerfil($perfil) {
        $this->Perfil = $perfil;
    }


}
?>