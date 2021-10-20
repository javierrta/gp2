<?php

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situaciones</title>
</head>

<body>
    <form id="frm_situaciones" action="" method="get">
        <label for="sel_situacion">Selecciona situacion del proyecto</label>
        <select name="sel_situacion" id="sel_situacion">
            <option value="Sin Iniciar">Sin Iniciar</option>
            <option value="Activo">Activo</option>
            <option value="Finalizado">Finalizado</option>
            <option value="Descartado">Descartado</option>
        </select>
        <input type="submit">
    </form>
</body>

</html>