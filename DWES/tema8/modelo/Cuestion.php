<?php

require_once 'CuestionPDO.php';
class Cuestion{

    private $codCuestion;
    private $descCuestion;
    private $numOrden;
    private $tipoRespuesta;
    private $promedioOpinion;
    private $numOpiniones;
    
    function __construct($codCuestion, $descCuestion, $numOrden, $tipoRespuesta) {
        $this->codCuestion = $codCuestion;
        $this->descCuestion = $descCuestion;
        $this->numOrden = $numOrden;
        $this->tipoRespuesta = $tipoRespuesta;
    }
    
    function getCodCuestion() {
        return $this->codCuestion;
    }

    function getDescCuestion() {
        return $this->descCuestion;
    }

    function getNumOrden() {
        return $this->numOrden;
    }

    function getTipoRespuesta() {
        return $this->tipoRespuesta;
    }

    function getPromedioOpinion() {
        return $this->promedioOpinion;
    }

    function getNumOpiniones() {
        return $this->numOpiniones;
    }

    function setCodCuestion($codCuestion) {
        $this->codCuestion = $codCuestion;
    }

    function setDescCuestion($descCuestion) {
        $this->descCuestion = $descCuestion;
    }

    function setNumOrden($numOrden) {
        $this->numOrden = $numOrden;
    }

    function setTipoRespuesta($tipoRespuesta) {
        $this->tipoRespuesta = $tipoRespuesta;
    }

    function setPromedioOpinion($promedioOpinion) {
        $this->promedioOpinion = $promedioOpinion;
    }

    function setNumOpiniones($numOpiniones) {
        $this->numOpiniones = $numOpiniones;
    }

    public static function buscarCuestiones(){
        
    }
    
    public static function buscarCuestionPorCodigo(){
        
    }
    
    public static function altaCuestion(){
        
    }
    
    public static function bajaFisicaCuestion(){
        
    }
    
    public static function modificaCuestion(){
        
    }
    
    public static function subirCuestion(){
        
    }
    
    public static function bajarCuestion(){
        
    }
    
    public static function CuentaOpiniones(){
        $cuestion = null;
        $cuestion = CuestionPDO::CuentaOpiniones();
        if(!empty($cuestion)){
            for($i=0;$i<count($cuestion);$i++){
                $cuestion[$i];
                //$cuestion[$i] = new ($opinion[$i]['CodUsuario'],$opinion[$i]['CodCuestion'],$opinion[$i]['ValorOpinion']);
            }
        }
        return $cuestion;
    }

    public static function cuentaOpinionesCuestiones(){
        $cuestion = null;
        $cuestiones = CuestionPDO::cuentaOpinionesCuestiones();
        if(!empty($opiniones)){
            for($i=0;$i<count($cuestiones);$i++){
                $cuestion[$i] = $cuestiones[$i];
            }
        }
        return $cuestion;
    }
    
    
}
    
