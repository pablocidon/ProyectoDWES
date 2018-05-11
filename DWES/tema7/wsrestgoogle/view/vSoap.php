<h3>Servicio SOAP</h3>
<form action="index.php?pagina=soap" method="post">
    <div class="form-group">
        <label for="ipSoap">¿Qué IP quieres investigar?</label>
        <input type="text" name="ipSoap" class="form-control" placeholder="ej: 80.24.201.183"/>
    </div>
    <input id="busqueda" type="submit" value="busqueda" class="btn btn-success" name="busqueda"/>
    <input id="volver" type="submit" value="volver" class="btn btn-danger" name="volver"/>
</form>
<br>
<div class="alert alert-info alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    <strong>Información</strong> La url utilizada en este servicio SOAP es <a
        href="http://ws.cdyne.com/ip2geo/ip2geo.asmx?wsdl" class="alert-link">esta.</a>
</div>
<?php if (isset($_POST["busqueda"])) {
    if (isset($_SESSION["respuestaSOAP"]->ResolveIPResult->City) && $_SESSION["respuestaSOAP"]->ResolveIPResult->City != "") { ?>
        <h1>Información recibida</h1>
        <div class="table-responsive">
            <!--table-striped-->
            <table class="table  table-bordered table-hover table-condensed">
                <tr>
                    <th>IP</th>
                    <th>Ciudad</th>
                    <th>Pais</th>
                    <th>Latitud</th>
                    <th>Longitud</th>
                    <th>Codigo de país</th>
                </tr>
                <tr class="active">
                    <td><?php echo $_POST["ipSoap"]; ?></td>
                    <td><?php echo $_SESSION["respuestaSOAP"]->ResolveIPResult->City; ?></td>
                    <td><?php echo $_SESSION["respuestaSOAP"]->ResolveIPResult->Country; ?></td>
                    <td><?php echo $_SESSION["respuestaSOAP"]->ResolveIPResult->Latitude; ?></td>
                    <td><?php echo $_SESSION["respuestaSOAP"]->ResolveIPResult->Longitude; ?></td>
                    <td><?php echo $_SESSION["respuestaSOAP"]->ResolveIPResult->CountryCode;
                        unset($_SESSION["respuestaSOAP"]); ?></td>
                </tr>
            </table>
        </div>
    <?php } else { ?>
        <div class="alert alert-danger alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <strong>Error</strong> Lo sentimos, no hemos encontrado resultados.
        </div>
    <?php }
} ?>