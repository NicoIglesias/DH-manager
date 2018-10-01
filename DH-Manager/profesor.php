<?php
 /**
  *
  */
 abstract class Profesor
 {
   private $nombre;
   private $apellido;
   private $antiguedad;
   private $codigoProfesor;


   function __construct($nombre, $apellido, $antiguedad, $codigoProfesor)
   {
     $this-> nombre = $nombre;
     $this-> apellido = $apellido;
     $this-> antiguedad = $antiguedad;
     $this-> codigoProfesor = $codigoProfesor;
   }

   public function setNombre($nombre){
     $this-> nombre = $nombre;
   }

   public function getNombre(){
     return $this-> nombre;
   }

   public function setApellido($apellido){
     $this-> apellido = $apellido;
   }

   public function getApellido(){
     return $this-> apellido;
   }

   public function setAntiguedad($antiguedad){
     $this-> nombre = $antiguedad;
   }

   public function getAntiguedad(){
     return $this-> antiguedad;
   }

   public function setCodigoProfesor($codigoProfesor){
     $this-> codigoProfesor = $codigoProfesor;
   }

   public function getCodigoProfesor(){
     return $this-> codigoProfesor;
   }
 }
