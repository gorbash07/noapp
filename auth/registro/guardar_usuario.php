<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "Nombre de Base de Datos"; // <-- para la base de datos

$conexion = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conexion->connect_error) {
    die("Error de conexion: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $usuario  = isset($_POST['usuario']) ? trim($_POST['usuario']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    // Validacion básica de campos vacios
    if (empty($usuario) || empty($password)) {
        $conexion->close();
        header("Location: index.php?error=vacio");
        exit();
    }

    //  VALIDACION DE CONTRASEÑA (ya vere como lo mejoro mas)
    $errores = [];

    if (strlen($password) < 8) {
        $errores[] = "La contraseña debe tener al menos 8 caracteres.";
    }
    if (strlen($password) > 128) {
        $errores[] = "La contraseña es demasiado larga (máximo 128 caracteres).";
    }
    if (!preg_match("/[A-Z]/", $password)) {
        $errores[] = "Debe incluir al menos una letra mayúscula.";
    }
    if (!preg_match("/[a-z]/", $password)) {
        $errores[] = "Debe incluir al menos una letra minúscula.";
    }
    if (!preg_match("/[0-9]/", $password)) {
        $errores[] = "Debe incluir al menos un número.";
    }
    if (!preg_match("/[^A-Za-z0-9]/", $password)) {
        $errores[] = "Debe incluir al menos un carácter especial (ej: @, #, $, %, etc).";
    }

    // Si hay errores de validacion, cerramos conexion y salimos
    if (!empty($errores)) {
        $conexion->close(); 
        $error_msg = urlencode(implode(" | ", $errores));
        header("Location: index.php?error=invalid_password&msg=" . $error_msg);
        exit();
    }
    
    // Verificar si el usuario ya existe
    $check = $conexion->prepare("SELECT id FROM usuarios WHERE usuario = ?");
    $check->bind_param("s", $usuario);
    $check->execute();
    $res_check = $check->get_result();

    if ($res_check->num_rows > 0) {
        $check->close();
        $conexion->close();
        header("Location: index.php?error=existe");
        exit();
    }
    $check->close();

    // Encriptar contraseña
    $password_encriptada = password_hash($password, PASSWORD_BCRYPT);

    // Insertar usuario
    $stmt = $conexion->prepare("INSERT INTO usuarios (usuario, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $usuario, $password_encriptada);

    if ($stmt->execute()) {

        $stmt->close();
        $conexion->close();
        header("Location: index.php?success=1");
        exit();
    } else {
        echo "Error al registrar: " . $stmt->error;
        $stmt->close(); 
    }
} 
$conexion->close(); // Despues de pasar toda la tarde en esto me di cuenta que aun no tocaba, pero estara ahi mientras XD 
?> 