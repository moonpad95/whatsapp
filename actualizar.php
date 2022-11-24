<?php 
include_once('conexion.php');


if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $sql="select*from contacto where id_contacto ='$id' ";
    $resultado=mysqli_query($con, $sql);

    if($fila=mysqli_fetch_assoc($resultado)){

            //Envio de datos al formulario
    }


}

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $direccion=$_POST['direccion'];
    $email=$_POST['email'];
    $tel=$_POST['telefono'];
    $cel=$_POST['cel'];
    $whatsapp=$_POST['whatsapp'];


    $sql="update contacto set nombre_suc='$nombre', direccion='$direccion', email='$email', tel='$tel', cel='$cel', whatsapp='$whatsapp' where id_contacto='$id'";

    $resultado = mysqli_query($con,$sql);


        if($resultado){
                echo
                "<script>
                alert('contacto actualizado correctamente!');
                location.href ='administrar.php';
                </script>";
        }
        else{
            echo
            "<script>
            alert('No fue posible actualizar el contacto!');
            location.href ='administrar.php';
            </script>";
        }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>Actualizar contacto</title>
</head>

<body>

    <center>
        <h1>
            ACTUALIZAR CONTACTO
        </h1>
        <hr>
        <h3>
           <a href="administrar.php">CONTACTOS->ADMINISTRAR</a> 
        </h3>
        <div class="col s6 offset-s6">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <table class="table striped ">
                <tr>
                    <td><label for="nombre">Nombre: </label></td>
                    <td><input type="text" name="nombre" value="<?php echo $fila['nombre_suc'] ?>"></td>
                </tr>
                <tr>                   <br>
                    <td><label for="direccion">Direccion: </label></td>
                    <td><input type="text" name="direccion" value="<?php echo $fila['direccion'] ?>"></td>
                    </tr> 
                    <br>
                    <tr>
                    <td><label for="email">email: </label></td>
                    <td><input type="email" name="email" value="<?php echo $fila['email'] ?>"></td>
                    </tr>

                    <br>
                    <tr>
                    <td><label for="telefono">Telefono: </label></td>
                    <td><input type="tel" name="telefono" value="<?php echo $fila['tel'] ?>"></td>
                    <br>
                    </tr>
                    <td><label for="cel">Cel: </label></td>
                    <td><input type="tel" name="cel" value="<?php echo $fila['cel'] ?>"></td>
                    <br>
                    <tr>
                    <td><label for="whatsapp">Whatsapp: </label></td>
                    <td><input type="tel" name="whatsapp" value="<?php echo $fila['whatsapp'] ?>"></td>
                    <br>
                    </tr>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="enviar" value="Guardar">
                    </td>
                </tr>
            </table>
            <input type="hidden" value="<?php echo $fila['id_contacto'] ?>" name="id">
        </form>
        </div>
    </center>

</body>

</html>