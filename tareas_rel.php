<?php
require_once("controladores/controlador.php");

//session_start();

if (!isset($_SESSION['id'])) {
//$usuId = $_SESSION['id'];
    $usuId = 5;
//$accionId = $_REQUEST['accionId'];
//echo $usuId;
    //$sql = "SELECT * FROM tareas where tar_usu_id = $usuId AND tar_acc_id = 1";
    $sql = "SELECT tar_id, tar_nombre, tar_fr_inicio, tar_fr_fin, tar_ft_inicio, tar_ft_fin, tar_usu_id, tar_duracion, tar_sit_id, tar_acc_id, tar_obs FROM tareas where tar_usu_id = 5 AND tar_acc_id = 1";
    $response = controlador::select($sql);
    $datos = json_decode($response);

    $modificar = null;

    if (isset($_GET['modificar'])) {
        $modificar = true;

        $sql = "SELECT tar_id, tar_nombre, tar_fr_inicio, tar_fr_fin, tar_ft_inicio, tar_ft_fin, tar_usu_id, tar_duracion, tar_sit_id, tar_acc_id, tar_obs FROM tareas where tar_usu_id = 5 AND tar_acc_id AND tar_id = $modificar";
        $response = controlador::select($sql);
        $datos = json_decode($response);
    }

}

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
    <h1>Relación de tareas del proyecto <?php echo 'id de acción'//$accionId ?></h1>
</header>
<main>

    <?php if ($modificar) : ?>
        <form method="get" action="">
            <input type="hidden" name="tar_id" value="">
            <label for="tar_nombre">
                <input type="text" name="tar_nombre" id=""> <?php $datos->tar_nombre  ?>
            </label>
            <label for="tar_fr_inicio">
                <input type="text" name="tar_fr_inicio" id="">
            </label>
            <label for="tar_fr_fin">
                <input type="text" name="tar_fr_fin" id="">
            </label>
            <label for="tar_ft_inicio">
                <input type="text" name="tar_ft_inicio" id="">
            </label>
            <label for="tar_ft_fin">
                <input type="text" name="tar_ft_fin" id="">
            </label>
            <label for="tar_usu_id">
                <input type="text" name="tar_usu_id" id="">
            </label>
            <label for="tar_duracion">
                <input type="text" name="tar_duracion" id="">
            </label>
            <label for="tar_sit_id">
                <input type="text" name="tar_sit_id" id="">
            </label>
            <label for="tar_acc_id">
                <input type="text" name="tar_acc_id" id="">
            </label>
            <label for="tar_obs">
                <input type="text" name="tar_obs" id="">
            </label>
            <button action="" method="POST" name="updateTarea">Modificar</button>
        </form>
    <?php else: ?>
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
                    <?php if ($usuId == $usuId) : ?>
                        <td>
                            <button name="modificar" value="<?php echo($registro->tar_id) ?>" action="">Modificar
                            </button>
                        </td>
                        <td>
                            <button value="<?php echo($registro->tar_obs) ?>">Borrar</button>
                        </td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</main>

</body>
</html>