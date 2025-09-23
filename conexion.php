<?php 

# campos para la conexión 
$servername = "localhost";
$username = "root";
$password = "";
$database = "gestion_empresarial";

# Conectamos los datos con la base de datos myphp
$conn = new mysqli($servername, $username, $password, $database);

# Se verifica que la conexión fue dada
if($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

# La conexión fue exitosa
echo "Conexión Corrercta"

?>