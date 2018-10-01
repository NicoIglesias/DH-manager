<?php

/**
 *
 */
class DHManager
{
  private $alumnos = [];
  private $profesores = [];
  private $cursos = [];
  }

  function __construct($alumnos, $profesores, $cursos)
  {
    $this-> alumnos = $alumnos;
    $this-> profesores = $profesores;
    $this-> cursos = $cursos;
  }

  public function altaCurso($nombreCurso, $codigoCurso, $cupoMax){
    $curso = new Curso($nombreCurso, $codigoCurso, $cupoMax);
    $this->cursos[] = $curso;
  }

  public function altaProfesorAdjunto($nombre, $apellido, $codigoProfesor, $cantidadDeHorasConsultas){
    $profesorAdjunto = new ProfesorAdjunto($nombre, $apellido, $codigoProfesor, $cantidadDeHorasConsultas);
    $this->profesores[] = $profesorAdjunto;

  }

  public function altaProfesorTitular($nombre, $apellido, $codigoProfesor, $especialidad) {
    $profesorTitular = new ProfesorTitular($nombre, $apellido, $codigoProfesor, $especialidad);
    $this->profesores[] = $profesorTitular;
  }


  public function altaAlumno($nombre, $apellido, $codigoDeAlumno){
    $alumno = new Alumno($nombre, $apellido, $codigoDeAlumno);
    $this->alumnos[] = $alumno;
  }

  public function inscribirAlumno($codigoCurso, $codigoDeAlumno){
    foreach ($this->cursos as $curso) {
      if ($curso->getCodigoCurso() == $codigoCurso) {
        foreach ($this->alumnos as $alumno) {
          if ($alumno->getCodigoDeAlumno() == $codigoDeAlumno) {
            $curso->agregarAlumno($alumno);
          }else {
            echo "No hay cupo";
          }
        }
      }
    }
  }

  public function asignarProfesores($codigoCurso, $codigoProfesor){
    foreach ($this->cursos as $curso) {
      if ($curso->getCodigoCurso() == $codigoCurso) {
        foreach ($this->profesores as $profesor) {
          if ($profesor->getCodigoProfesor() == $codigoProfesor) {
            $curso->agregarProfesor($profesor);
          }else {
            echo "No hay cupo";
          }
        }
      }
    }
  }


}
