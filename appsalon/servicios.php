<?php 

require "includes/funciones.php";

$servicios = obtenerServicios();

json_encode($servicios);