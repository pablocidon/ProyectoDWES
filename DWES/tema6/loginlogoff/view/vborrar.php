<div class="container">    
    <div class="row col-md-12 tecnologias">
        
        <form name="formulario" class="form-horizontal" action="index.php?pagina=borrar" method="post">
            <fieldset>
                <br>
                <h4>¿Estas seguro que que quieres eliminar el perfil?</h4>
                <div class="form-group">
                    <label for="usuario" class="control-label col-md-2">Usuario</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="alfabetico" name="codUsuario" value="<?php echo $_SESSION['usuario']->getCodUsuario(); ?>" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="perfil" class="control-label col-md-2">Perfil</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="alfabetico" name="codUsuario" value="<?php echo $_SESSION['usuario']->getPerfil(); ?>" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="descripcion" class="control-label col-md-2">Descipcion</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="alfabetico" name="descripcion" value="<?php echo $_SESSION['usuario']->getDescripcion(); ?>" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="numeroAccesos" class="control-label col-md-2">Numero accesos</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="alfabetico" name="numeroAccesos" value="<?php echo $_SESSION['usuario']->getNumeroAccesos(); ?>" disabled>
                    </div>
                </div> 
                <div class="form-group">
                    <label for="ultimaConexion" class="control-label col-md-2">Ultima conexion</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="alfabetico" name="ultimaConexion" value="<?php echo $_SESSION['usuario']->getUltimaConexion(); ?>" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-2 col-md-offset-2">
                        <button name="enviar" type="submit" class="btn btn-danger" value="Si">Si</button> 
                        <button name="enviar" type="submit" class="btn btn-primary" value="No">No</button> 
                          <?php echo '<span class="w3-bar w3-text-red">'. $error .'</span>'; ?> 
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>

