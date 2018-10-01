<?php
/**
 *
 */
class ProfesorAdjunto extends Profesor
{
  private $cantidadDeHorasConsultas;

  function __construct($nombre, $apellido, $antiguedad, $codigoProfesor, $cantidadDeHorasConsultas)
  {
    parent::__construct($nombre, $apellido, $antiguedad, $codigoProfesor);
    $this->cantidadDeHorasConsultas = $cantidadDeHorasConsultas;
  }
}
