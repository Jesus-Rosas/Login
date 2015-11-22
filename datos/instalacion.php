<?php
include "conexion.php";
function crearDb()
{
  $database = "formLogin";
  $cnn = new Conexion();
  $con = $cnn->conectar();
  $sql = "CREATE DATABASE.'$database'";
  mysqli_query($con,$sql);
  
  mysqli_close($con);
}

function crearTablas()
{
  $database = "formLogin";
  $cnn = new Conexion();
  $con = $cnn->conectar();
  mysqli_select_db($con, $database);
  $sql = "CREATE TABLE tbl_usuarios(id INT(11) NOT NULL AUTO_INCREMENT),usuario CHAR(50) NOT NULL, contrasena CHAR(50) NOT NULL, PRIMARY KEY(id)";
  mysqli_query($con, $sql);
  mysqli_close($con);
}