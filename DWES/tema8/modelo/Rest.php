<?php
//require_once "HttpRequest.php";
class Rest{
    public static function consultaRestISO($codigoISO){
        $resultJSON = file_get_contents('http://services.groupkt.com/country/get/iso2code/' . $codigoISO);
        return json_decode($resultJSON);
    }
/*https://opendata.aemet.es/dist/index.html?*/
    public static function consultaRestAEMET($municipio){
        $request = new HttpRequest('https://opendata.aemet.es/opendata/api/prediccion/especifica/municipio/horaria/'.$municipio,HttpRequest::METH_POST);
        $request->setUrl('https://opendata.aemet.es/opendata/api/prediccion/especifica/municipio/horaria/'.$municipio);
        $request->setMethod(HTTP_METH_GET);

        $request->setQueryData(array(
            'api_key' => 'eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJwYWJsb19jaWRiYXJAb3V0bG9vay5lcyIsImp0aSI6IjM4NDZmMTc0LWJhOTctNDY2Ny1iNWQ2LTE2NTViMmVhZTkwMSIsImlzcyI6IkFFTUVUIiwiaWF0IjoxNTI0ODI1MzA5LCJ1c2VySWQiOiIzODQ2ZjE3NC1iYTk3LTQ2NjctYjVkNi0xNjU1YjJlYWU5MDEiLCJyb2xlIjoiIn0.VulNnuP8rJk4EvFWbhmH_V16aff5V6U-tpb2wrkDYIs'
        ));

        $request->setHeaders(array(
            'cache-control' => 'no-cache'
        ));

        try {
            $response = $request->send();
            $response->getBody();
        } catch (HttpException $ex) {
            echo $ex;
        }

        return $response;
    }

    public static function consultaRestGoogle($origen,$destino){
        $resultados = curl_init('http://maps.googleapis.com/maps/api/directions/json?origin='.$origen.'&destination='.$destino.'&key=AIzaSyBw0cIF4aTnZ33gdSE-WYvln42COVcXzyQ');
        return curl_exec($resultados);

    }

    public static function realizarOperacion($operador1,$operador2,$tipoOperacion){
        $resultadoJSON = file_get_contents('http://192.168.20.19/COMUN1/public_html/DWES/tema8/API/APIRestCalculadora.php?operador1='.$operador1.'&operador2='.$operador2.'&tipoOperacion='.$tipoOperacion);
        return json_decode($resultadoJSON);
    }

    public static function consultaRestVolumen($codigoDepartamento){
        return Departamento::buscarDepartamentoPorCodigo($codigoDepartamento);
    }
}
?>