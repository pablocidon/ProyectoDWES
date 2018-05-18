<?php
require_once 'OpinionesPDO.php';
class Opinion{

    private $codUsuario;
    private $codCuestion;
    private $valorRespuesta;

    /**
     * @return mixed
     */
    public function getCodUsuario(){
        return $this->codUsuario;
    }

    /**
     * @return mixed
     */
    public function getCodCuestion(){
        return $this->codCuestion;
    }


    /**
     * @return mixed
     */
    public function getValorRespuesta(){
        return $this->valorRespuesta;
    }

    /**
     * @param mixed $codUsuario
     */
    public function setCodUsuario($codUsuario){
        $this->codUsuario = $codUsuario;
    }

    /**
     * @param mixed $codCuestion
     */
    public function setCodCuestion($codCuestion){
        $this->codCuestion = $codCuestion;
    }

    /**
     * @param mixed $valorRespuesta
     */
    public function setValorRespuesta($valorRespuesta){
        $this->valorRespuesta = $valorRespuesta;
    }

    public function __construct($codUsuario,$codCuestion,$valorRespuesta){
        $this->codUsuario = $codUsuario;
        $this->codCuestion = $codCuestion;
        $this->valorRespuesta = $valorRespuesta;
    }

    public static function buscaOpinionesUsuario($codUsuario){
        $opinion = null;
        $arrayOpinion = OpinionesPDO::buscaOpinionesUsuario($codUsuario);
        if(!empty($arrayOpinion)){
            $opinion[$i] = new Opinion($opinion[$i]['CodUsuario'],$opinion[$i]['CodCuestion'],$opinion[$i]['ValorOpinion']);
        }
        return $opinion;
    }

    public static function  buscaOpinionesCuestion($cuestion){

    }

    public static function altaOpinionUsuario(){

    }

    public static function bajaFisicaOpinionUsuario(){

    }

    public static function modificaOpinionUsuario(){

    }

    public static function listarOpinionesUsuarios(){
        $opinion = null;
        $opiniones = OpinionesPDO::listarOpinionesUsuarios();
        if(!empty($opiniones)){
            for($i=0;$i<count($opiniones);$i++){
                $opinion[$i] = $opiniones[$i];
            }
        }
        return $opinion;
    }
    }
?>