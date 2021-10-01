<div class="card">
    <div class="card-header">
        Agregar empleado
    </div>
    <div class="card-body">
        <form action="" method="POST">
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre:</label>
              <input type="text"
                class="form-control" name="nombre" id="nombre" placeholder="Nombre del empleado">
            </div>

            <div class="mb-3">
              <label for="correo" class="form-label">Correo: </label>
              <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo del empleado">
            </div>

            <input name="" id="" class="btn btn-success" type="submit" value="Agregar empleado">
            <a class="btn btn-primary" href="./?controlador=empleados&accion=inicio" role="button">Cancelar</a>
        </form>
    </div>
</div>