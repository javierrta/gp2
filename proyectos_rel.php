<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relación de  Proyectos</title>
    <style>
        #h1_proy_rel{
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>
<h1 id="h1_proy_rel">GESTOR DE PROYECTOS</h1>
        <?php
            require_once("controladores/controlador.php");
            if (!isset($_SESSION['usu_id'])){
                //$usu_id = $_SESSION['usu_id'];
                $usu_id = "1";
                $sql = "SELECT * FROM proyectos 
                        WHERE proy_usu_id = $usu_id 
                        ORDER BY proy_id";
                $datos = controlador::select($sql);
                $sql = "SELECT * FROM proyectos 
                        WHERE proy_usu_id != $usu_id 
                        ORDER BY proy_id";
                $datos1 = controlador::select($sql);
            }
            
            echo "<pre>";
            var_export($datos);
            echo "</pre>";
            echo "<br>";
            echo "<pre>";
            var_export($datos1);
            echo "</pre>";
            
            
        ?>    
</body>
</html>