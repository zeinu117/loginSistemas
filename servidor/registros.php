<?php 
$nombre =  $_POST['nombre'];
$apellidoPaterno =  $_POST['apellidoPaterno'];
$apellidoMaterno =  $_POST['apellidoMaterno'];
$sexo = $_POST['sexo'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$usuario =  $_POST['usuario'];
$password = sha1($_POST['password']);

include "conexion.php";
$conexion = conexion();

/**validacion de usuarios repetidos */
$sql = "SELECT usuario FROM t_usuarios WHERE usuario = '$usuario'";
$respuesta = mysqli_query($conexion, $sql);
if (mysqli_num_rows($respuesta)) {
    echo "este usuario ya existe, usa otro porfavor!";
    exit;
}
/**no es necesario crear otra variable sql  */
$sql2 = "INSERT INTO t_usuarios(nombre,
                            apellidoPaterno,
                            apellidoMaterno,
                            sexo,
                            telefono,
                            email,
                            usuario,
                            password) 
            VALUES ('$nombre',
                    '$apellidoPaterno',
                    '$apellidoMaterno',
                    '$sexo',
                    '$telefono',
                    '$email',
                    '$usuario',
                    '$password')";
        $respuesta = mysqli_query($conexion, $sql2);
        mysqli_close($conexion);
        if ($respuesta) {
            header("location:../index.php");
        }else{
            echo "no se pudo registrar";
        }

?>