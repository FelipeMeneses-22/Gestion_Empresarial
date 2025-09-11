<?php include("template/header.php")?>

<h1>Formulario de registro</h1>

<form action="" method="post">
    <!-- Nombre -->
    <div class="form-group mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" id="nombre" placeholder="Ingresar Nombre" class="form-control">
    </div>
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
    <!-- Confirmar Contraseña -->
    <div class="form-group mb-3">
        <label for="okPassword" class="form-label">Confirmar Contraseña</label>
        <input type="text" name="okPassword" id="okPassword" placeholder="Confirmar Contraseña" class="form-control">
    </div>

    <!-- Boton para registrar -->
     <input type="submit" value="Registrar" class="btn btn-primary">
</form>

<?php include("template/footer.php")?> 