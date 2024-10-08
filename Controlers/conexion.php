<?php

$host = 'localhost';
$user = 'root';
$paswword =  '';
$bdname = 'tareas';
$puerto = '3306';

$conexion = new mysqli($host, $user, $paswword, $bdname, $puerto);
$conexion->set_charset("utf-8");
