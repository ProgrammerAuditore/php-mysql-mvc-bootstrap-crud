<?php
// El routeador sirve para cambiar entre las distintas 
// controladores y vistas de nuestro página web.

include_once("controladores/controlador_".$controlador.".php");

$objControlador = "Controlador".ucfirst($controlador);

$controlador = new $objControlador();

$controlador->$accion();

?>