<?php
include_once 'conexion.php';


$sql = "select*from contacto";

$resultado = mysqli_query($con, $sql);
$num_filas = mysqli_num_rows($resultado);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>Administrar contactos</title>
</head>

<body>


    <br>
    <h1 class="center">ADMINISTRAR CONTACTOS</h1>
    <br>
    <hr>
    <center>
        <table class="table striped">
            <tr>
                <th>
                <td>ID</td>
                </th>
                <th>
                <td>Nombre</td>
                </th>
                <th>
                <td>Direccion</td>
                </th>
                <th>
                <td>Email</td>
                </th>
                <th>
                <td>Telefono</td>
                </th>
                <th>
                <td>Celular</td>
                </th>
                <th>
                <td>Whatsapp</td>
                </th>
                <th>
                <td>Acciones</td>
                </th>

            </tr>
            <tr>
                <?php
                while ($fila = mysqli_fetch_assoc($resultado)) {
                ?>

            <tr class="red lighten-3">
                <td>
                    <?php
                    echo $fila['id_contacto']
                    ?>
                </td>
                <td>
                    <?php
                    echo $fila['nombre_suc']
                    ?>
                </td>
                <td>
                    <?php
                    echo $fila['direccion']
                    ?>
                </td>
                <td>
                    <?php
                    echo $fila['email']
                    ?>
                </td>
                <td>
                    <?php
                    echo $fila['tel']
                    ?>
                </td>
                <td>
                    <?php
                    echo $fila['cel']
                    ?>
                </td>
                <td>
                    <?php
                    echo $fila['whatsapp']
                    ?>
                </td>
                <td>
                    <a href="actualizar.php?id=<?php echo $fila['id_contacto'] ?>">Actualizar</a>
                </td>
            </tr>
            </tr>

        <?php

                }
        ?>
        </table>
        <h3>TOTAL DE REGISTROS: <?php echo $num_filas; ?> </h2>
    </center>

</body>

</html>