<?php

require_once 'DBPDO.php';
class CuestionPDO{
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
        $consulta="Select Cuestion.DescCuestion, Opiniones.ValorOpinion, Cuestion.NumOrden, Opiniones.CodCuestion, COUNT(Opiniones.CodUsuario) as NumRespuestasValor from Cuestion INNER JOIN Opiniones on Cuestion.CodCuestion=Opiniones.CodCuestion GROUP BY Cuestion.DescCuestion, Opiniones.CodCuestion, Cuestion.NumOrden, Opiniones.ValorOpinion ORDER by Cuestion.NumOrden";
        $cuestion=[];
        $arrayCuestion=[];
        $contador=0;
        $resultado = DBPDO::ejecutaConsulta($consulta, []);
        if($resultado->rowCount()>0){
            while ($resultadoFetch=$resultado ->fetchObject()){
                $arrayCuestion['CodCuestion'] = $resultadoFetch->CodCuestion;
                $arrayCuestion['DescCuestion'] = $resultadoFetch->DescCuestion;
                $arrayCuestion['NumOrden'] = $resultadoFetch->NumOrden;
                $arrayCuestion['TipoRespuesta'] = $resultadoFetch->TipoRespuesta;
                $cuestion[$contador]=$arrayCuestion;
                $contador++;
            }
        }
    }

    public static function cuentaOpinionesCuestiones(){
        $consulta = "SELECT Cuestion.DescCuestion, Opiniones.CodCuestion, Cuestion.NumOrden, COUNT(Opiniones.CodUsuario) AS NumRespuestasCuestion FROM Cuestion INNER JOIN Opiniones ON Cuestion.CodCuestion = Opiniones.CodCuestion GROUP BY Cuestion.DescCuestion, Opiniones.CodCuestion, Cuestion.NumOrden ORDER BY Cuestion.NumOrden";
        $cuestion=[];
        $arrayCuestion=[];
        $contador=0;
        $resultado = DBPDO::ejecutaConsulta($consulta, []);
        if($resultado->rowCount()>0){
            while ($resultadoFetch=$resultado ->fetchObject()){
                $arrayCuestion['DescCuestion'] = $resultadoFetch->DescCuestion;
                $arrayCuestion['CodCuestion'] = $resultadoFetch->CodCuestion;
                $arrayCuestion['NumOrden'] = $resultadoFetch->NumOrden;
                $arrayCuestion['NumRespuestasCuestion'] = $resultadoFetch->NumRespuestasCuestion;
                $cuestion[$contador]=$arrayCuestion;
                //print_r($cuestion[$contador]);
                $contador++;
            }
        }
        return $cuestion;
    }
}

