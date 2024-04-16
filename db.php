<?php

  $conectar= mysqli_connect("localhost","root","mysql02","php");

  if(!$conectar){
    die("fallo en la conexion de la base de datos");
  }

  //ARREGLA EL PROBLEMA DE LOS ACENTOS
  mysqli_set_charset($conectar,"utf8");
?>