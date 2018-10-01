<?php
/**
 *
 */
class ProfesorTitular extends Profesor
{
  private $especialidad;

  function __construct($nombre, $apellido, $antiguedad, $codigoProfesor, $especialidad)
  {
    $this-> especialidad = $especialidad;
    parent:: __construct($nombre, $apellido, $antiguedad, $codigoProfesor);

  }
}
