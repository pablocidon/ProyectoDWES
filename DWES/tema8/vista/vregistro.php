<div class="container">
    <div class="card">
        <div class="card-body">
            <form name="formulario" class="form-horizontal" action="index.php?pagina=registrar" method="post">
                <p class="h4 text-center py-4">Formulario de registro</p>

                <div class="md-form">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" id="materialFormCardNameEx" class="form-control" name="codUsuario" <?php if(isset($_POST['codUsuario']) && empty($mensajeError['errorUsuario'])){ echo 'value="',$_POST['codUsuario'],'"';}?>>
                    <label for="materialFormCardNameEx" class="font-weight-light">Usuario</label>
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorUsuario'])){echo '<span style="color:red">'.$mensajeError['errorUsuario'].'</span>';}
                    if(isset($mensajeError['errorUsuarioRepetido'])){echo '<span style="color:red">'.$mensajeError['errorUsuarioRepetido'].'</span>';} ?>
                </div>

                <div class="md-form">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="text" id="materialFormCardEmailEx" class="form-control" name="descripcion" <?php if(isset($_POST['descripcion']) && empty($mensajeError['errorDescripcion'])){ echo 'value="',$_POST['descripcion'],'"';}?>>
                    <label for="materialFormCardEmailEx" class="font-weight-light">Descripción</label>
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorDescripcion'])){echo '<span style="color:red">'.$mensajeError['errorDescripcion'].'</span><br>';} ?>
                </div>

                <div class="md-form">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <input type="password" id="materialFormCardPasswordEx" class="form-control" name="password">
                    <label for="materialFormCardPasswordEx" class="font-weight-light">Password</label>
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorPassword'])){echo '<span style="color:red">'.$mensajeError['errorPassword'].'</span><br>';} ?>
                </div>

                <div class="md-form">
                    <i class="fa fa-exclamation-triangle prefix grey-text"></i>
                    <input type="password" id="materialFormCardConfirmEx" class="form-control" name="repPassword">
                    <label for="materialFormCardConfirmEx" class="font-weight-light">Repite password</label>
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorPasswordNoIgual'])){echo '<span style="color:red">'.$mensajeError['errorPasswordNoIgual'].'</span><br>';} ?>
                </div>

                <div class="text-center py-4 mt-3">
                    <input type="submit" name="enviar" class="btn btn-rounded btn-success" value="Aceptar">
                    <input type="submit" name="volver" class="btn btn-rounded btn-danger" value="Cancelar">
                </div>
            </form>
        </div>
    </div>
</div>

