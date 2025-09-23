<?php 

# conectamos el servidor con la carpeta "conexion"
include("conexion.php")

# Oragnizamos las variables que pusimos
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];

# Generamos insert para capturas los datos del formulario
$sql = "INSERT INTO usuarios(nombre, apellido, correo, contrasena) VALUES('$nombre', '$apellido', '$correo', '$contrasena')"


?>