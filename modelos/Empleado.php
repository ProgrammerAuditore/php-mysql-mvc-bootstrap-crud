<?php 

class Empleado {

    public $id;
    public $nombre;
    public $correo;

    public function __construct($id, $nombre, $correo){
        $this->id=$id;
        $this->nombre=$nombre;
        $this->correo=$correo;
    }

    public static function consultar(){
        $listEmpleados = [];
        $conexion = BD::crearInstancia();
        $sql = $conexion->query("SELECT * FROM tblempleados");

        foreach($sql->fetchAll() as $empleado){
            $listEmpleados[] = new Empleado($empleado['emplID'], $empleado['emplNombre'], $empleado['emplCorreo'] );   

        }
        
        return $listEmpleados;
    }

    public static function crear($nombre, $correo){
        $conexion = BD::crearInstancia();
        
        $sql = $conexion->prepare("INSERT INTO tblempleados(emplNombre, emplCorreo) VALUES (?,?) ");
        $sql->execute(array($nombre, $correo));

    }

    public static function borrar($id){
        $conexion = BD::crearInstancia();
        
        $sql = $conexion->prepare("DELETE FROM tblempleados WHERE emplID = ?");
        $sql->execute(array($id));

    }

    public static function buscar($id){
        $conexion = BD::crearInstancia();
        $sql = $conexion->prepare("SELECT * FROM tblempleados WHERE emplID = ?");
        $sql->execute(array($id));

        $empleado = $sql->fetch();
        return new  Empleado($empleado['emplID'], $empleado['emplNombre'], $empleado['emplCorreo'] );
    }

    public static function editar($id, $nombre, $correo){
        $conexion = BD::crearInstancia();
        $sql = $conexion->prepare("UPDATE tblempleados SET emplNombre=?, emplCorreo=? WHERE emplID=?");
        $sql->execute(array($nombre, $correo, $id));
        

    }

}


?>