<?php

include("conexion.php");

if (isset($_POST['usuario']) && isset($_POST['password']))
{
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $consulta = "SELECT nombreusera, contrausera FROM alumnos WHERE nombreusera = '$usuario' AND contrausera = '$password'";
     
    $resultado = pg_query($conexion, $consulta);

    if(pg_num_rows($resultado)>0)
    {
        session_start();
        header('Location: alumnos/index-alumno.php');
        $_SESSION['username'] = $usuario;
    }
    else
    {
        header('Location: ../index.html');
    }

}
?>