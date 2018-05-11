<h3>Servicio REST</h3>
<form action="index.php?pagina=tiempo" method="post">
    <div class="form-group">
        <label for="municipio">Nombre de municipio a buscar:</label>
        <input type="text" name="municipio" id="municipio" placeholder="Ej. Quiruelas de Vidriales" class="form-control">
    </div>
    <input id="enviar" type="submit" value="Consultar" class="btn btn-success" name="enviar"/>
</form>
<br>
<div class="alert alert-info alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    <strong>Información</strong> La url utilizada en este servicio Rest es
    <a href="https://opendata.aemet.es/opendata/api/prediccion/especifica/municipio/horaria/">
        https://opendata.aemet.es/opendata/api/prediccion/especifica/municipio/horaria/</a>
</div>
<?php if (isset($_POST["enviar"])) { ?>
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <!--<strong><?php //echo($_SESSION["tiempo"]->date); ?></strong><br>
        <strong><?php// echo($_SESSION["tiempo"]->server); ?></strong><br>
        <strong><?php// echo($_SESSION["tiempo"]->connection); ?></strong><br>
        <strong><?php //echo($_SESSION["tiempo"]->transfer-encoding); ?></strong><br>
        <strong><?php //echo($_SESSION["tiempo"]->content-type); ?></strong>-->
        <?php
            /*foreach ($_SESSION['tiempo'] as $clave=>$valor){
                echo "<b>$clave</b> = $valor<br/>";
            }*/
           if(isset($_SESSION['tiempo'])){
               print $_SESSION['tiempo'];
           }else{
               echo "error";
           }
        ?>
    </div>
<?php } ?>