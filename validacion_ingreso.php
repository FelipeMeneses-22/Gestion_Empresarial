<?php
$rol = $_POST['rol'];

if ($rol == "admin") {
    header("Location: template/admin/homeAdmin.php");
} elseif ($rol == "gerente") {
    header("Location: gerente.php");
} elseif ($rol == "asistente") {
    header("Location: asistente.php");
} else {
    echo "Rol no válido";
}
exit;
?>
