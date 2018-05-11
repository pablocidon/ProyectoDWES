<?php
class restGoogle{
    public static function zonaHoraria($lat,$long,$timestamp){
        $arrContextOptions=array( 
            "ssl"=>array( 
                "verify_peer"=>false, 
                "verify_peer_name"=>false, 
            ), 
        );
        $marcatiempo=time(); 
        $fichero=file_get_contents("https://maps.googleapis.com/maps/api/timezone/json?location=".$_POST['latitud'].",".$_POST['longitud']."&timestamp=".$marcatiempo."&key=AIzaSyB6PZAj4RnnTosYsdk9WxQ2rqJ6-6jFE-o",false, stream_context_create($arrContextOptions));
        $mostrar=json_decode($fichero);
        return $mostrar;
    }
}
