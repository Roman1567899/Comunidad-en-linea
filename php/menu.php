<?php
session_start();

if (empty($_SESSION["username"])) 
{
    # Lo redireccionamos al formulario de inicio de sesión
    sleep(3);
    echo "Usted no tiene autorización";
    header("Location: index.html");
    # Y salimos del script
    exit();
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/css.css">
    <title>Menú de navegación</title>
    <script src="../js/script-menu-responsive.js" defer></script>

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
                <li><a href="#">Algo4</a></li>
            </ol>
        </nav>
    </header>
    
</body>
</html>