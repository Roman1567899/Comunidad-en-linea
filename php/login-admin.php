<?php

require("conexion.php");
// $consulta = "SELECT * FROM administrador, administrativo WHERE user_admin = $usuario AND contra_admin = $contraseña AND administrador.rol_id_departamento = administrativo.id_departamento";

$usuario = $_POST['usuario'];
$contraseña = $_POST['password'];

$consulta = "SELECT * FROM administrador2 WHERE username = '$usuario' AND contra = '$contraseña'";

$ejecutar = pg_query($conexion, $consulta);

$resultado = pg_num_rows($ejecutar);

if($resultado>0)
{
    $validar = pg_fetch_array ($ejecutar);
    $_SESSION['rol'] = $validar['rol'];
    switch($_SESSION['rol'])
    {
        case 1:
            echo"algo1";
            
            break;
        case 2:
            echo"algo2";
            break;
        case 3:
            echo"algo3";
            break;
        case 4:
            echo"algo4";
            header("Location: administradores/biblioteca/index-biblioteca.php");
            break;
        case 5:
            echo"algo5";
            break;
        case 6:
            echo"algo6";
            header("Location: administradores/administrador/administrador.php");

    }
}



// if($validar)
// {
//     echo"Existe usuario";
//     switch($validar['administrador.rol_id_departamento'])
//     {
//         case 0:
//             echo "jsjsjs estupido0 .|.";
//              break;
//         case 1:
//             // header("administradores/administrador/administrador.php");
//             echo "jsjsjs estupido1 .|.";
//             break;
//         case 2:
//             // header("administradores/administrador/administrador.php");
//             echo "jsjsjs estupido2 .|.";
//             break;
//         case 3:
//             // header("administradores/administrador/administrador.php");
//             echo "jsjsjs estupido3 .|.";
//             break;
//         case 4:
//             header("administradores/biblioteca/index-biblioteca.php");
//             echo "jsjsjs estupido4 .|.";
//             break;
//         case 5:
//             // header("administradores/administrador/administrador.php");
//             echo "jsjsjs estupido5 .|.";
//             break;
//         case 6:
//             header("administradores/administrador/administrador.php");
//             echo "jsjsjs estupido6 .|.";
//             break;
//     }
// }




?>