<?php

$db = mysqli_connect('localhost', 'root', 'bryan', 'appsalon');

if(!$db){
    echo 'Error en la conexion';
    exit;
}

//echo "Conexion correcta";