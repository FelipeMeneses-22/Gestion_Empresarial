<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Management </title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- CSS Personalizado -->
    <link rel="stylesheet" href="/Gestion_Empresarial/css/style.css">
</head>
<body class="container mt-5 mb-5 p-4 border rounded shadow" style="max-width: 900px;">
    <header>
        <!-- Sección superior con logo y título -->
        <div class="container-fluid fondo1 pt-3 pb-3">
            <div class="row align-items-center justify-content-center justify-content-md-start">
                <div class="col-12 col-md-4 text-center text-md-end">
                    <a href="home.php">
                        <img src="/Gestion_Empresarial/img/buisness.png" alt="Logo" class="d-inline-block align-text-top rounded-circle logo-circle">
                    </a>
                </div>
                <div class="col-md-8 text-center">
                    <h1>Business Management</h1>
                </div>
            </div>
        </div>
        <!-- Mensaje de bienvenida -->
         <p class="text-center py-2">Bienvenido felipe tu rol es de administrador es decir que eres un super visitante!!</p>

        <!-- Barra de navegación del administrador -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid justify-content-star">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-star mx-5" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="homeAdmin.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="cambiarContrasena.php">Cambio de contraseña</a></li>
                        <li class="nav-item"><a class="nav-link" href="../../home.php">Salir</a></li>
                        <select name="opciones" id="opciones">
                            <option href="usuarios.php">Opciones</option>
                            <option href="usuarios.php"><a href="#">Administrador</a></option>
                            <option href="productos.php">Productos</option>
                            <option href="inventario.php">Inventario</option>
                            <option href="reportes.php">Reportes Financieros</option>
                        </select>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
