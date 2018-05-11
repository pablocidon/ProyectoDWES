<h3>Servicio REST</h3>
<form action="index.php?pagina=rest" method="post">
    <div class="form-group">
        <label for="isoCode">Selecciona un código ISO para saber a que pais corresponde:</label>
        <select name="isoCode" id="isoCode" class="form-control">
            <?php
            foreach ($_SESSION["listaCodigoIso"]->RestResponse->result as $listadoIsoCode) {
                echo "<option value='" . $listadoIsoCode->alpha2_code . "'>";
                print_r($listadoIsoCode->alpha2_code);
                echo "</option>";
            }
            unset($_SESSION["respuestaRest"]);
            ?>
        </select>
    </div>
    <input id="convertir" type="submit" value="convertir" class="btn btn-success" name="convertir"/>
</form>
<div class="alert alert-info alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    <strong>Información</strong> La url utilizada en este servicio Rest es <kbd>http://services.groupkt.com/country/get/iso2code/</kbd>
</div>
<?php if (isset($_POST["convertir"])) { ?>
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        El país correspondiente al código ISO <strong><?php echo $_POST["isoCode"]; ?></strong> es
        <strong><?php echo($_SESSION["respuestaRest2"]->RestResponse->result->name); ?></strong>
    </div>
<?php } ?>
