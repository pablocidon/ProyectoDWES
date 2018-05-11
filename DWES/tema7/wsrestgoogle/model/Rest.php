<?php
class Rest{
    public static function consultaRestISO($codigoISO){
        $resultJSON = file_get_contents('http://services.groupkt.com/country/get/iso2code/' . $codigoISO);
        return json_decode($resultJSON);
    }
/*https://opendata.aemet.es/dist/index.html?*/
    public static function consultaRestAEMET($municipio){
        $resultadoJSON = file_get_contents('https://opendata.aemet.es/opendata/api/prediccion/especifica/municipio/horaria/'.$municipio);
        return json_decode($resultadoJSON);
    }
}
?>