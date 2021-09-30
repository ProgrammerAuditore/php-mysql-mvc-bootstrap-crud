<?php 

include_once("modelos/Empleado.php");
include_once("conexion.php");

BD::crearInstancia();

class ControladorEmpleados{

    public function inicio(){

        $empleados = Empleado::consultar();

        include_once("vistas/empleados/Inicio.php");
    }

    public function crear(){
        
        if( $_POST ){
            print_r($_POST);
            
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            
            Empleado::crear($nombre, $correo);

        }
         
        include_once("vistas/empleados/Crear.php");
    }

    public function editar(){
        include_once("vistas/empleados/Editar.php");
    }

}

?>