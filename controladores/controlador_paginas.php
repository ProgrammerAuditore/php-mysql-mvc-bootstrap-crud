<?php 
class ControladorPaginas{

    public function inicio(){
        include_once("vistas/paginas/Inicio.php");
    }

    public function error(){
        include_once("vistas/paginas/Error.php");
    }
}
?>