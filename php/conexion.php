<?php

$rutaservidor = "localhost";
$dbname = "ubuntuprueba";
$user = "postgres";
$password = "ubuntu";

try
{
    $conexion = pg_connect("host=$rutaservidor dbname=$dbname user=$user password=$password");
} catch(Exception $error)
{
    echo $error->getMessage();
}