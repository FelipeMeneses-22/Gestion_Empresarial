<?php include("template/header.php")?>

<form action="" method="post">
    <h2>Formulario de ingreso</h2>
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
    <!-- Boton para Ingresar -->
     <input type="submit" value="Ingresar" class="btn btn-primary">
</form>

<?php include("template/footer.php")?>