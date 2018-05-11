<?php
class Soap{
    public static function consultaSoapIP($ip){
        $url = "http://ws.cdyne.com/ip2geo/ip2geo.asmx?wsdl";
        try {
            $client = new SoapClient($url, ["trace" => 1]);
            $result = $client->ResolveIP(["ipAddress" => $ip, "licenseKey" => "0"]);
        } catch (SoapFault $e) {
            $result = $e->getMessage();
        }finally{
            return $result;
        }
    }
    
    public static function getBiblia($nombre,$capitulo){
       // $libro=array{
            
       // }
    }
}
?>