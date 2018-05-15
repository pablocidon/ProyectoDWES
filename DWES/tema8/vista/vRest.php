<form action="index.php?pagina=rest" method="post" style="width: 100%;">
    <div class="form-group">
        <div class="pull-right">
            <div class="col-md-12">
                <input id="volver" type="submit" value="volver" class="btn btn-rounded btn-danger" name="volver"/>
            </div>
        </div>
    </div>
    <h3>Servicio REST código de paises</h3>
    <div class="form-group row">
        <label for="isoCode" class="col-sm-4 col-form-label">Selecciona un código ISO para saber a que pais corresponde:</label>
        <select name="isoCode" id="isoCode" class="form-control col-sm-1">
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
    <div class="form-group">
        <div class="pull-right">
            <div class="col-md-12">
                <input id="convertir" type="submit" value="Convertir" class="btn btn-rounded btn-success" name="convertir"/>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="alert alert-info alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <strong>Información</strong> La url utilizada en este servicio Rest es <kbd>http://services.groupkt.com/country/get/iso2code/</kbd>
        </div>
    </div>
    <?php if (isset($_POST["convertir"])) { ?>
        <div class="alert alert-success alert-dismissable col-sm-10">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            El país correspondiente al código ISO <strong><?php echo $_POST["isoCode"]; ?></strong> es
            <strong><?php echo($_SESSION["respuestaRest2"]->RestResponse->result->name); ?></strong>
        </div>
    <?php } ?>
    <hr>
    <h3>Servicio REST calculadora</h3>
    <div class="form-group row">
        <label for="operador1" class="control-label col-sm-2">Operando 1:</label>
        <div class="col-sm-10">
            <input type="number" class="form-control col-sm-1" id="alfabetico" name="operador1" placeholder="" <?php if(isset($_POST['operador1'])){ echo 'value="',$_POST['operador1'],'"';}?>>
        </div>
    </div>
    <div class="form-group row">
        <label for="operacion" class="control-label col-sm-2">Tipo de operacion:</label>
        <div class="col-sm-10">
            <select class="form-control col-sm-2" id="operador" name="tipoOperacion">
                <option class="heading" selected>Seleccionar</option>
                <option value="suma">Suma (+)</option>
                <option value="resta">Resta (-)</option>
                <option value="multiplicacion">Multiplicación (*)</option>
                <option value="division">División (/)</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="operador2" class="col-sm-2 col-form-label">Operando 2:</label>
        <div class="col-sm-10">
            <input type="number" class="form-control col-sm-1" id="op2"  name="operador2" placeholder="" <?php if(isset($_POST['operador2'])){ echo 'value="',$_POST['operador2'],'"';}?>>
        </div>
    </div>
    <div class="form-group">
        <div class="pull-right">
            <div class="col-md-12">
                <input id="calc" type="submit" value="Calcular" class="btn btn-rounded btn-success" name="calcular"/>
            </div>
        </div>
    </div>
    <div class="form-group">
        <?php if (isset($_POST["calcular"])) { ?>
            <div class="alert alert-success alert-dismissable col-sm-10">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                El resultado es
                <strong><?php echo $_SESSION['resultadoOperacion']->Resultado[0]->Resultado;?></strong>
            </div>
        <?php } ?>
    </div>
    <br><br><hr>
    <h3>Servicio REST Departamentos</h3>
    <div class="form-group row">
        <!-- Material input -->
        <label for="CodDepartamento" class="control-label col-sm-2">Codigo Departamento:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control col-sm-1" id="alfabetico" maxlength="3" name="CodDepartamento" placeholder="" <?php if(isset($_POST['CodDepartamento']) && empty($mensajeError['errorCodDepartamento'])){ echo 'value="',$_POST['CodDepartamento'],'"';}?>>
            <?php //si existe mensaje de error lo mostramos
            if(isset($mensajeError['errorCodDepartamento'])){echo '<span style="color:red">'.$mensajeError['errorCodDepartamento'].'</span>';} ?>
        </div>
    </div>
    <div class="form-group">
        <div class="pull-right">
            <div class="col-md-12">
                <input id="convertir" type="submit" value="Consultar" class="btn btn-rounded btn-success" name="consultar"/>
            </div>
        </div>
    </div>

    <?php if (isset($_POST["consultar"])) { ?>
        <div class="alert alert-success alert-dismissable col-sm-10">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <?php
                if(is_null($_SESSION['departamento'])){
                    echo "No existe el departamento";
                }else{
                    echo "El volumen de negocio del departamento cuyo código es <strong>".$_POST['CodDepartamento']."</strong> es
            <strong>".$_SESSION['departamento']->getVolumenDeNegocio()."</strong>";
                }
            ?>

        </div>
    <?php } ?>
</form>


