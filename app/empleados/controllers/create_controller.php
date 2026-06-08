<?php
include('../../../model/conexion.php');

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$cedula = $_POST['cedula'];
$rif = $_POST['rif'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$sexo = $_POST['sexo'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];
$estado_civil = $_POST['estado_civil'];
$cargo = $_POST['cargo'];
$departamento = $_POST['departamento'];

$sexo = ($sexo == 'Masculino') ? 'M' : (($sexo == 'Femenino') ? 'F' : $sexo);

$pdo->beginTransaction();

// Verificar si el correo electrónico ya existe
$query = $pdo->prepare('SELECT COUNT(*) FROM empleados WHERE email = :email');
$query->bindParam(':email', $email);
$query->execute();
$email_count = $query->fetchColumn();

if ($email_count > 0) {
    throw new Exception('Este correo electrónico ya está registrado');
}

$sentencia = $pdo->prepare('INSERT INTO empleados (nombres, apellidos, cedula, rif, fecha_nacimiento, sexo, telefono, email, direccion, estado_civil, cargo, departamento) 
        VALUES (:nombres, :apellidos, :cedula, :rif, :fecha_nacimiento, :sexo, :telefono, :email, :direccion, :estado_civil, :cargo, :departamento)');

$sentencia->bindParam(':nombres', $nombres);
$sentencia->bindParam(':apellidos', $apellidos);
$sentencia->bindParam(':cedula', $cedula);
$sentencia->bindParam(':rif', $rif);
$sentencia->bindParam(':fecha_nacimiento', $fecha_nacimiento);
$sentencia->bindParam(':sexo', $sexo);
$sentencia->bindParam(':telefono', $telefono);
$sentencia->bindParam(':email', $email);
$sentencia->bindParam(':direccion', $direccion);
$sentencia->bindParam(':estado_civil', $estado_civil);
$sentencia->bindParam(':cargo', $cargo);
$sentencia->bindParam(':departamento', $departamento);

if ($sentencia->execute()) {
    $pdo->commit();
    session_start();
    $_SESSION['mensaje'] = "Registrado con éxito";
    $_SESSION['icono'] = "success";
    header('Location: ' . APP_URL . '/app/empleados/index.php');
    exit();
} else {
    $pdo->rollBack();
    session_start();
    $_SESSION['mensaje'] = "Error al registrar";
    $_SESSION['icono'] = "error";
    ?>
    <script>window.history.back();</script>
    <?php
    exit();
}
?>