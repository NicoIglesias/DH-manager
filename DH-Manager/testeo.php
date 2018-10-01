<?php

require_once "autoload.php";


$DH = new Curso("FullStack", 3, "profesor", "profesor2", $alumnos, 8);

echo "<pre>";
var_dump($DH);
echo "</pre>";

$rocio = new Alumno("rocio","quintero", 40522980);

echo "<pre>";
var_dump($rocio);
echo "</pre>";

$nico = new ProfesorTitular("nicolas", "iglesias", 4, 9, "sol");
echo "<pre>";
var_dump($nico);
echo "</pre>";
