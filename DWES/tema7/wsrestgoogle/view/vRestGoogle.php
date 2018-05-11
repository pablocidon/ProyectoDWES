<h3>Servicio REST Google</h3>
<form action="index.php?pagina=restGoogle" method="post">
    <div class="form-group">
        <label for="municipio">Latitud:</label>
        <input type="text" name="latitud" id="latitud" placeholder="" class="form-control">
    </div>
    <div class="form-group">
        <label for="municipio">Longitud:</label>
        <input type="text" name="longitud" id="longitud" placeholder="" class="form-control">
    </div>
    <input id="enviar" type="submit" value="Enviar" class="btn btn-success" name="enviar"/>
</form>
<?php if (!empty($datos)) {  
    echo "Latitud: ".$latitud."<br>";
    echo "Longitud: ".$longitud."<br>";
    echo "Datos: ".$datos->results[0]->timezone;
}
?>