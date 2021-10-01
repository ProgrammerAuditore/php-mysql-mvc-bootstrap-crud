<div class="card">
    <div class="card-header">
        Editar empleado
    </div>
    <div class="card-body">
        <form action="" method="POST">

            <div class="mb-3">
            <label for="id" class="form-label">ID: </label>
            <input type="text"
                class="form-control" name="id" id="id" placeholder="ID empleado"
                value="<?php print $empleado->id; ?>">
            </div>

            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre:</label>
              <input type="text"
                class="form-control" name="nombre" id="nombre" placeholder="Nombre del empleado"
                value="<?php print $empleado->nombre; ?>">
            </div>

            <div class="mb-3">
              <label for="correo" class="form-label">Correo: </label>
              <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo del empleado"
              value="<?php print $empleado->correo; ?>">
            </div>

            <input name="" id="" class="btn btn-success" type="submit" value="Editar empleado">
        </form>
    </div>
</div>