<div class="card">
    <div class="card-header">
        <a class="btn btn-success" href="?controlador=empleados&accion=crear" role="button">Crear empleado</a>
    </div>
    <div class="card-body">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach( $empleados as $empleado){ ?>

        <tr>
            <td><?php print $empleado->id; ?></td>
            <td><?php print $empleado->nombre; ?></td>
            <td><?php print $empleado->correo; ?></td>
            <td>
            <div class="btn-group" role="group">
                <a class="btn btn-warning" 
                href="?controlador=empleados&accion=editar&id=<?php print $empleado->id; ?>"
                role="button">Editar</a>
                <a class="btn btn-danger" 
                href="?controlador=empleados&accion=borrar&id=<?php print $empleado->id; ?>" 
                role="button">Borrar</a>    
            </div>
            </td>
        </tr>

    <?php }; ?>
    </tbody>
</table>

    </div>
</div>

