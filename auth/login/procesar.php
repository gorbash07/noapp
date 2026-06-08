<?php
// Comentado para evitar un error en pantalla al momento de subirlo, solo descomenten para probar
/* 
$db_host = "localhost";    
$db_user = "root";         
$db_pass = "";             
$db_name = "Nombre de la Base de Datos"; // <-- para el nombre de la base datos :v

$conexion = new mysqli($db_host, $db_user, $db_pass, $db_name);
*/
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = isset($_POST['usuario']) ? trim($_POST['usuario']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    if (empty($usuario) || empty($password)) {
        $conexion->close();
        header("Location: index.php?error=vacio");
        exit();
    }

    $stmt = $conexion->prepare("SELECT id, password FROM usuarios WHERE usuario = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {
        $datos_usuario = $resultado->fetch_assoc();
        
        if (password_verify($password, $datos_usuario['password'])) {
            session_start();
            $_SESSION['usuario'] = $usuario;
            $_SESSION['id_usuario'] = $datos_usuario['id'];

            // Redirige al módulo de empleados de tu estructura app
            header("Location: ../../app/empleados/index.php");
            exit();
        } else {
            header("Location: index.php?error=1");
            exit();
        }
    } else {
        header("Location: index.php?error=1");
        exit();
    }
    $stmt->close();
}
$conexion->close();
?>
