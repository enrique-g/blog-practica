<?php session_start();
//ARCHIVO DE ADMIN
require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);
// comprobar session
comprobarSession();

if(!$conexion){
    header ('Location: ../error.php');
}

$posts = obtener_post($blog_config['post_por_pagina'], $conexion);



require '../views/admin.index.view.php';


?>