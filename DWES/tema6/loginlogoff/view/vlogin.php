<?php
    //require_once "../view/cabeceraEjercicios.php";
?>
<div class="container">    
    <div class="row col-md-12 tecnologias">
        
        <form name="formulario" class="form-horizontal" action="<?PHP echo $_SERVER['PHP_SELF']; ?>" method="post">
            <fieldset>
                <br>
                <div class="form-group">
                    <label for="usuario" class="control-label col-md-2">Usuario</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="alfabetico" name="codUsuario">
                        <?php //si existe mensaje de error lo mostramos
                        if(isset($mensajeError['errorUsuario'])){echo '<span style="color:red">'.$mensajeError['errorUsuario'].'</span>';} ?>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="password" class="control-label col-md-2">Contraseña</label>
                    <div class="col-md-10">
                        <input type="password" class="form-control" id="alfabetico" name="password" >
                         <?php //si existe mensaje de error lo mostramos
                        if(isset($mensajeError['errorPassword'])){echo '<span style="color:red">'.$mensajeError['errorPassword'].'</span><br>';} ?>                   
                         <?php echo "<span style='color:red'>",$error,"</span>"?><br><br>
                    </div>
                </div>
              

                <div class="form-group">
                    <div class="col-md-2 col-md-offset-2">
                        
                        <input type="submit" name="enviar" class="btn btn-primary" value="Enviar"/>
                        <a href="index.php?pagina=registrar" name="registrar" >Registrate!</a>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
<?php
//require_once "../view/pie.php";
?>
