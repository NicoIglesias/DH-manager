<?php

class Curso
{
  private $nombreCurso;
  private $codigoCurso;
  private $profesorTitular;
  private $profesorAdjunto;
  private $alumnos = [];
  private $cupoMax;


  function __construct($nombreCurso, $codigoCurso, $cupoMax)
  {
    $this-> nombreCurso = $nombreCurso;
    $this-> codigoCurso = $codigoCurso;
    $this-> profesorTitular = $profesorTitular;
    $this-> profesorAdjunto = $profesorAdjunto;
    $this-> alumnos = $alumnos;
    $this-> cupomax = $cupoMax;

  }

  public function setNombreCurso($nombreCurso){
    $this-> nombreCurso = $nombreCurso;
  }

  public function getNombreCurso(){
    return $this->nombreCurso;
  }

  public function setCodigoCurso($codigoCurso){
    $this-> codigoCurso = $codigoCurso;
  }

  public function getCodigoCurso(){
    return $this->codigoCurso;
  }

  public function agregarAlumno(alumno $alumnos){
    if ( count($this->alumnos) < $this->cupoMax) {
      $this-> alumnos[] = $alumnos ;
      echo "Alumno agregado";
    }else {
      echo "Cupo completo";
    }
  }
}
