<?php


class Alumno
{
  private $nombre;
  private $apellido;
  private $codigoDeAlumno;

  function __construct($nombre, $apellido, $codigoDeAlumno)
  {
   $this-> nombre = $nombre;
   $this-> apellido = $apellido;
   $this-> codigoDeAlumno = $codigoDeAlumno;
  }

  public function setNombre($nombre){
    $this-> nombre = $nombre;
  }

  public function getNombre(){
    return $this->nombre;
  }

  public function setApellido($apellido){
    $this-> apellido = $apellido;
  }

  public function getApellido(){
    return $this->apellido;
  }

  public function setCodigoDeAlumno($codigoDeAlumno){
    $this-> codigoDeAlumno = $codigoDeAlumno;
  }

  public function getCodigoDeAlumno(){
    return $this->codigoDeAlumno;
  }
}
