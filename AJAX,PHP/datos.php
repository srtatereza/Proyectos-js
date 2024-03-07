<?php
header("Content-Type: application/json; charset=UTF-8");

if (
    $_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['direccion'])
    && isset($_POST['telefono']) && isset($_POST['correo'])
) {
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $direccion = trim($_POST['direccion']);
    $telefono = trim($_POST['telefono']);
    $correo = trim($_POST['correo']);

    // Verifica que ninguna variable esté vacía después de quitar los espacios en blanco
    if (!empty($nombre) && !empty($apellido) && !empty($direccion) && !empty($telefono) && !empty($correo)) {

        // Los datos están completos y no contienen espacios en blanco
        $response = array('message' => "¡Enhorabuena, $nombre $apellido! Tu dirección es $direccion, teléfono es $telefono y tu correo electrónico es $correo. Ahora eres parte de nuestra Familia Fitness.");
        echo json_encode($response);
    } else {
        // Los datos están vacíos o contienen espacios en blanco
        $response = array('message' => "Error: No se proporcionaron todos los datos requeridos o contienen espacios en blanco.");
        echo json_encode($response);
    }
} else {
    // No se recibieron parámetros
    $response = array('message' => "Error: No se proporcionaron todos los datos requeridos.");
    echo json_encode($response);
}
?>