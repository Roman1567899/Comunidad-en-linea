<?php
session_start();
if(empty($_SESSION['username']))
{
    $usuario = $_SESSION['username'];
    header("Location: ../../index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../estilos/css.css">
    <title>Comunidad en línea UTBB</title>
</head>
<body>
<div class="menuresponsive" id="menuresponsive" >
    </div>
    <!-- <header class="nomostrado mostrado" id="mostrarmenu"></header> -->
    <header class="mostrado" id="mostrarmenu">
        <nav>
            <ol class="ol">
                <li class="li"><a href="#">Inicio</a>
                    <ol class="sub-ol">
                        <li class="sub-li"><a href="#">otroalgo1</a></li>
                        <li class="sub-li"><a href="#">otroalgo1</a></li>
                        <li class="sub-li"><a href="#">otroalgo1</a></li>
                    </ol>
                </li>
                <li><a href="#">Algo1</a></li>
                <li><a href="#">Algo2</a></li>
                <li><a href="#">Algo3</a></li>
                <li><a href="cerrar-sesion.php">Cerrar Sesión</a></li>
            </ol>
        </nav>
    </header>
    <h1>Comunidad universitaria en líena</h1>
</body>
</html>