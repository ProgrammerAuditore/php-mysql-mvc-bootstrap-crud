<?php

if( isset($_GET['controlador']) && isset($_GET['accion']) ){
  
  $controlador = $_GET['controlador'];
  $accion = $_GET['accion'];

  

}

require_once("vistas/template.php");
?>