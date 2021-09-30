<?php 

class Empleado {

    public static function crear($nombre, $correo){
        $conexion = BD::crearInstancia();
        
        $sql = $conexion->prepare("INSERT INTO tblempleados(emplNombre, emplCorreo) VALUES (?,?) ");
        $sql->execute(array($nombre, $correo));

    }

}


?>