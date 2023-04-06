<?php

include ("../../conexion.php");
$busqueda = "SELECT * FROM biblioteca";
$resultado = pg_query( $conexion, $busqueda);
// $busqueda=$conexion->pg_query("Select * from biblioteca");
/*Almacenamos el resultado de fetchAll en una variable*/
// $arrDatos=$busqueda->fetchAll(PDO::FETCH_ASSOC);
$arrDatos = pg_fetch_all($resultado);

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../estilos/css.css">
    <link rel="stylesheet" href="../../../fontawesomeiconos/css/all.css">
    <title>Tabla</title>
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
   <div class="main">
        <form class="form" id="formularioBuscador">
            <label for="busqueda"></label>
            <input type="text" id="busqueda" placeholder="Buscar" class="buscador" name="buscador">
            <button type="sumbit" class="btn-buscar"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>

        <div id="contenedor-buscador" class="">
        
        </div>
        
        <table  class="" id="tablamuestraphp">
            <thead>
                <tr>
                    <th>TÍtulo</th>
                    <th>Autor</th>
                    <th>editorial</th>
                    <th>Descripción</th>
                    <th>Imágen</th>
                </tr>
            </thead>
            <?php
                foreach ($arrDatos as $muestra) 
                {
                    echo '<tr>';
                        echo "<td >" . $muestra["titulolibro"] . "</td>";
                        echo "<td >" . $muestra["autorlibro"] . "</td>";
                        echo "<td >" . $muestra["editoriallibro"] . "</td>";
                        echo "<td >" . $muestra["descripcionlibro"] . "</td>";
                        echo "<td >"; echo "<img class='imagenes-muestra-tabla'src='../../../imagenes/".$muestra['imagenlibro']."' alt='".$muestra['imagenlibro']."'>"; echo"</td>";
                    echo '</tr>';
                }
            ?>
        </table>
        
   </div>
   <script src="../../../js/buscador.js"></script>
</body>
</html>