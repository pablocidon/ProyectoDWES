


<form name="formulario" class="form-horizontal" action="index.php?Departamento=<?php echo $_GET['Departamento'];?>&pagina=baja&numeroPagina=<?php echo $_GET['numeroPagina'];?>" method="post" style="width: 100%">
    <fieldset>
        <h4>¿Dar de baja logica el departamento?</h4>
        <div class="form-group row">
            <!-- Material input -->
            <label for="CodDepartamento" class="control-label col-sm-2">Codigo Departamento:</label>
            <div class="col-sm-10">

                <input type="text" class="form-control col-sm-1 text-center" id="alfabetico" name="CodDepartamento" value="<?php echo $departamento->getCodDepartamento(); //Obtenemos el código del departamento que vamos a eliminar?>" readonly>

            </div>
        </div>
        <div class="form-group row">
            <!-- Material input -->
            <label for="inputPassword3MD" class="col-sm-2 col-form-label">Descripcion Departamento:</label>
            <div class="col-sm-10">

                <input type="text" class="form-control" id="alfabetico" name="DescDepartamento" value="<?php echo $departamento->getDescDepartamento(); //Obtenemos la descripción del departamento que se va a eliminar?>" readonly>

            </div>
        </div>
        <div class="form-group row">
            <!-- Material input -->
            <label for="inputPassword3MD" class="col-sm-2 col-form-label">Fecha de alta:</label>
            <div class="col-sm-10">

                <input type="text" class="form-control col-sm-2 text-center" id="alfabetico" name="Alta" value="<?php echo $departamento->getFechaAltaDepartamento(); //Obtenemos la fecha en la que el departamento ha sido dado de alta.?>" readonly>

            </div>
        </div>
        <div class="form-group row">
            <!-- Material input -->
            <label for="inputPassword3MD" class="col-sm-2 col-form-label">Volumen de Negocio:</label>
            <div class="col-sm-10">

                <input type="text" class="form-control col-sm-1 text-center" id="alfabetico" name="Volumen" value="<?php echo $departamento->getVolumenDeNegocio(); //Obtenermos el volumen de negocio del departamento?>" readonly>

            </div>
        </div>

        <div class="form-group">
            <div class="pull-right">
                <div class="col-md-12">
                    <input type="submit" name="si" class="btn btn-rounded btn-success" value="Aceptar"/>
                    <input type="submit" name="no" class="btn btn-rounded btn-danger" value="Cancelar"/>
                </div>
            </div>
        </div>
    </fieldset>
</form>