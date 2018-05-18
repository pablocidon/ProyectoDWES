<?php
require_once 'DBPDO.php';
class OpinionesPDO{
    public static function buscaOpinionesUsuario($codUsuario){
        $consulta = "SELECT * FROM Opiniones WHERE CodUsuario = ?";
        $arrayOpinion = [];
        $resultado = DBPDO::ejecutaConsulta($consulta,[$codUsuario]);
        if($resultado->rowCount()==1){
            $resultadoFetch = $resultado->fetchObject();
            $arrayOpinion['CodUsuario'] = $resultadoFetch->CodUsuario;
            $arrayOpinion['CodCuestion'] = $resultadoFetch->CodCuestion;
            $arrayOpinion['ValorOpinion'] = $resultadoFetch->ValorOpinion; 
        }
        return $arrayOpinion;
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
        $consulta = "SELECT Opiniones.CodUsuario, Usuarios.DescUsuario, Opiniones.CodCuestion, Cuestion.DescCuestion, Opiniones.ValorOpinion FROM Opiniones INNER JOIN Cuestion on Opiniones.CodCuestion = Cuestion.CodCuestion INNER JOIN Usuarios on Opiniones.CodUsuario = Usuarios.CodUsuario";
        $opinion = [];
        $arrayOpinion = [];
        $contador = 0;
        $resultado = DBPDO::ejecutaConsulta($consulta,[]);
        if($resultado->rowCount()>0){
            while ($resultadoFetch = $resultado -> fetchObject()){
                $arrayOpinion['CodUsuario'] = $resultadoFetch->CodUsuario;
                $arrayOpinion['DescUsuario'] = $resultadoFetch->DescUsuario;
                $arrayOpinion['CodCuestion'] = $resultadoFetch->CodCuestion;
                $arrayOpinion['DescCuestion'] = $resultadoFetch->DescCuestion;
                $arrayOpinion['ValorOpinion'] = $resultadoFetch->ValorOpinion;
                $opinion[$contador]=$arrayOpinion;
                $contador++;
            }
        }
        return $opinion;
    }
}
?>