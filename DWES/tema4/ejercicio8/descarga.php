<?php
header("Content-disposition: attachment; filename=departamentos.xml");
header("Content-type: text/xml");
readfile("departamentos.xml");
?>