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
                <a class="btn btn-warning" href="#" role="button">Editar</a>
                <a class="btn btn-danger" href="#" role="button">Borrar</a>    
            </div>
            </td>
        </tr>

    <?php }; ?>
    </tbody>
</table>
