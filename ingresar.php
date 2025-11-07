<?php include("template/header.php")?>

<form action="validacion_Ingreso.php" method="post" class="container mt-5 mb-5 p-4 border rounded shadow" style="max-width: 600px;">
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
    <!-- Espacio para seleccionar rol -->
    <div class="form-group mb-3">
        <label for="rol">Elige tu rol:</label>
        <select id="rol" name="rol" class="form-control">
            <option value="admin">Administrador</option>
            <option value="gerente">Gerente</option>
            <option value="asistente">Asistente</option>
        </select>
    </div>
    <!-- Boton para ingresar -->
     <input type="submit" value="Ingresar" class="btn btn-primary" id="#">
</form>

<?php include("template/footer.php")?>