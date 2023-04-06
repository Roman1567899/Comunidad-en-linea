<?php

include("../../../conexion.php");



if(isset($_POST['buscador']))
{
    $buscar = $_POST['buscador'];

    $sql = "SELECT * FROM biblioteca WHERE titulolibro LIKE '%".$buscar."%' OR autorlibro LIKE '%".$buscar."%' OR editoriallibro  LIKE '%".$buscar."%' OR descripcionlibro LIKE '%".$buscar."%' ";

    $libro= [];
    $error=[ 'error' => false];

    $ejecutar = pg_query($conexion,$sql);

    if(pg_num_rows($ejecutar)>0)
    {
       while( $fila = pg_fetch_assoc($ejecutar))
       {
        $libro = $fila;
       }
       echo json_encode ($libro);
    }
    else
    {
        echo ($error);
    }   
}

?>