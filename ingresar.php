<?php include("template/header.php")?>

<form action="validacion_Ingreso.php" method="post">
    <h2>Formulario de ingreso</h2>
    <!-- Correo -->
    <div class="form-group mb-3">
        <label for="correo" class="form-label">Correo</label>
        <input type="text" name="correo" id="correo" placeholder="Ingresar correo" class="form-control">
    </div>
    <!-- Contraseña -->
    <div class="form-group mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="text" name="password" id="password" placeholder="Ingresar Contraseña" class="form-control">
    </div>
    <div>
        <label for="rol">Elige tu rol:</label>
        <select id="rol" name="rol">
            <option value="admin">Administrador</option>
            <option value="gerente">Gerente</option>
            <option value="asistente">Asistente</option>
        </select>
    </div>
    <!-- Boton para registrar -->
     <input type="submit" value="Ingresar" class="btn btn-primary">
</form>

<?php include("template/footer.php")?>