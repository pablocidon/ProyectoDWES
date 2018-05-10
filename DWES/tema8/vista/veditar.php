
        <form name="formulario" class="form-horizontal" action="index.php?pagina=editar" method="post" style="width: 100%;">
            <fieldset>
                <br>
                <div class="form-group row">
                    <label for="usuario" class="control-label col-md-2">Usuario</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control col-sm-2" id="alfabetico" name="codUsuario" value="<?php echo $_SESSION['usuario']->getCodUsuario(); ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="perfil" class="control-label col-md-2">Perfil</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control col-sm-2" id="alfabetico" name="perfil" value="<?php echo $_SESSION['usuario']->getPerfil(); ?>" readonly>
                    </div>
                </div>
                 <div class="form-group row">
                    <label for="descripcion" class="control-label col-md-2">Descripcion</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="alfabetico" name="descripcion" value="<?php if(isset($_POST['enviar'])){ echo $_POST['descripcion'];}else{ echo $_SESSION['usuario']->getDescripcion();}?>">
                         <?php //si existe mensaje de error lo mostramos
                        if(isset($mensajeError['errorDescripcion'])){echo '<span style="color:red">'.$mensajeError['errorDescripcion'].'</span><br>';} ?>                          
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="password" class="control-label col-md-2">Nueva Contraseña</label>
                    <div class="col-md-10">
                        <input type="password" class="form-control" id="alfabetico" name="password" >
                         <?php //si existe mensaje de error lo mostramos
                        if(isset($mensajeError['errorPassword'])){echo '<span style="color:red">'.$mensajeError['errorPassword'].'</span><br>';} ?>                   
                    </div>
                </div>
                <div class="form-group row">
                    <label for="repPassword" class="control-label col-md-2">Repetir Contraseña</label>
                    <div class="col-md-10">
                        <input type="password" class="form-control" id="alfabetico" name="repPassword" >
                         <?php //si existe mensaje de error lo mostramos
                        if(isset($mensajeError['errorPasswordNoIgual'])){echo '<span style="color:red">'.$mensajeError['errorPasswordNoIgual'].'</span><br>';} ?>                   
                    </div>
                </div>
                <div class="form-group row">
                    <label for="numeroAccesos" class="control-label col-md-2">Numero accesos</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control col-sm-1" id="alfabetico" name="numeroAccesos" value="<?php echo $_SESSION['usuario']->getNumeroAccesos(); ?>" readonly>
                    </div>
                </div> 
                <div class="form-group row">
                    <label for="ultimaConexion" class="control-label col-md-2">Ultima conexion</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control col-sm-2" id="alfabetico" name="ultimaConexion" value="<?php echo $_SESSION['usuario']->getUltimaConexion(); ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="pull-right">
                        <div class="col-md-12">
                            <input type="submit" name="enviar" class="btn btn-rounded btn-success" value="Aceptar"/>
                            <a href="index.php?pagina=inicio" class="btn btn-rounded btn-danger">Cancelar</a>
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>


