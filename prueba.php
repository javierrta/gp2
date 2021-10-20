<?php
require_once("controladores/controlador.php");

$sql = "SELECT * FROM situaciones";
$datos = controlador::select($sql);
echo '<pre>';
var_export($datos);
echo '</pre>';