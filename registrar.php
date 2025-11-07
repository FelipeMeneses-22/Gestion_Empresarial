<?php include("template/header.php")?>

<!-- Formulario para registrar -->
<form action="server.php" method="post" class="container mb-5 p-4" style="max-width: 900px;">
    <h2>Formulario de registro</h2>
    <!-- Nombre -->
    <div class="form-group mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" id="nombre" placeholder="Ingresar Nombre" class="form-control">
    </div>
    <!-- Apellido -->
    <div class="form-group mb-3">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" name="apellido" id="apellido" placeholder="Ingresar apellido" class="form-control">
    </div>
    <!-- Correo -->
    <div class="form-group mb-3">
        <label for="correo" class="form-label">Correo</label>
        <input type="text" name="correo" id="correo" placeholder="Ingresar correo" class="form-control">
    </div>
    <!-- Contraseña -->
    <div class="form-group mb-3">
        <label for="contrasena" class="form-label">Contraseña</label>
        <input type="password" name="contrasena" id="contrasena" placeholder="Ingresar Contraseña" class="form-control">
    </div>
    <!-- Confirmar Contraseña -->
    <div class="form-group mb-3">
        <label for="contrasena" class="form-label">Confirmar Contraseña</label>
        <input type="password" name="contrasena" id="contrasena" placeholder="Confirmar Contraseña" class="form-control">
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

    <!-- Boton para registrar -->
     <input type="submit" value="Registrar" class="col-12 btn btn-primary">
</form>

<?php include("template/footer.php")?>