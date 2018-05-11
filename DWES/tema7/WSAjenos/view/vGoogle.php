<h3>Servicio REST</h3>
<form name="formularioAlta" class="form-horizontal" action="index.php?pagina=google" method="post">
    <fieldset>
        <br>
        <div class="form-group">
            <label for="origen" class="control-label col-md-2">Origen:</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="origen" name="origen" placeholder="" <?php if(isset($_POST['origen']) && empty($mensajeError['errorOrigen'])){ echo 'value="',$_POST['origen'],'"';}?>>
            </div>
            <div class="col-md-offset-9 col-md-9">
                <?php //si existe mensaje de error lo mostramos
                if(isset($mensajeError['errorOrigen'])){echo '<span style="color:red">'.$mensajeError['errorOrigen'].'</span>';} ?>
            </div>
        </div>
        <div class="form-group">
            <label for="destino" class="control-label col-md-2">Destino:</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="destino" name="destino" placeholder="" <?php if(isset($_POST['destino']) && empty($mensajeError['errorDestino'])){ echo 'value="',$_POST['destino'],'"';}?>>
                <?php //si existe mensaje de error lo mostramos
                if(isset($mensajeError['errorLatitud'])){echo '<span style="color:red">'.$mensajeError['errorDestino'].'</span>';} ?>
            </div>
        </div>
        <div class="form-group">
            <div class="pull-right">
                <div class="col-md-1">
                    <input type="submit" name="consultar" class="btn btn-success" value="Consultar"/>
                </div>
            </div>
        </div>
    </fieldset>
</form>
<!--<div class="alert alert-info alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    <strong>Información</strong> La url utilizada en este servicio Rest es <kbd>http://services.groupkt.com/country/get/iso2code/</kbd>
</div>-->
<?php if (isset($_POST["convertir"])) { ?>
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        El país correspondiente al código ISO <strong><?php echo $_POST["isoCode"]; ?></strong> es
        <strong><?php echo($_SESSION["respuestaRest2"]->RestResponse->result->name); ?></strong>
    </div>
<?php } ?>
