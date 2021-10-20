<?php
require_once("controladores/controlador.php");

//$usuId = $_REQUEST['usu'];
//$accionId = $_REQUEST['accionId'];
$sql = "SELECT * FROM tareas where tar_usu_id = 5 AND tar_acc_id = 1";

$response = controlador::select($sql);
$datos = json_decode($response);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relación de tareas</title>
</head>
<body>
<header>
    <h1>Relación de tareas del proyecto <? echo $accionId ?></h1>
</header>
<main>
    <table style="border: black 1px solid; ">
        <th>
        <td>
            id de tarea
        </td>
        <td>
            nombre de tarea
        </td>

        <td>
            F. real inicio
        </td>

        <td>
            F. real fin
        </td>

        <td>
            F. teórica inicio
        </td>
        <td>
            F. teórica fin
        </td>
        <td>
            id de usuario
        </td>
        <td>
            duración
        </td>
        <td>
            situación
        </td>
        <td>
            id de acción
        </td>
        <td>
            observaciones
        </td>
        </th>
        <?php foreach ($datos as $registro) : ?>
            <tr style="border: blue 1px solid; ">
                <td style="border: greenyellow 1px solid; ">
                    <?php echo($registro->tar_id) ?>
                </td>
                <td>
                    <?php echo($registro->tar_nombre) ?>
                </td>

                <td>
                    <?php echo($registro->tar_fr_inicio) ?>
                </td>

                <td>
                    <?php echo($registro->tar_fr_fin) ?>
                </td>

                <td>
                    <?php echo($registro->tar_ft_inicio) ?>
                </td>
                <td>
                    <?php echo($registro->tar_ft_fin) ?>
                </td>
                <td>
                    <?php echo($registro->tar_usu_id) ?>
                </td>
                <td>
                    <?php echo($registro->tar_duracion) ?>
                </td>
                <td>
                    <?php echo($registro->tar_sit_id) ?>
                </td>
                <td>
                    <?php echo($registro->tar_acc_id) ?>
                </td>
                <td>
                    <?php echo($registro->tar_obs) ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</main>

</body>
</html>