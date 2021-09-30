<?php 

class ControladorEmpleados{

    public function inicio(){
        include_once("vistas/empleados/Inicio.php");
    }

    public function crear(){
        include_once("vistas/empleados/Crear.php");
    }

    public function editar(){
        include_once("vistas/empleados/Editar.php");
    }

}

?>