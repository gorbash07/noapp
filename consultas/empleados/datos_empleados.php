<?php

$sql_empleados = "SELECT * FROM empleados WHERE id_empleado = :id_empleado";
$query_empleados = $pdo->prepare($sql_empleados);
$query_empleados->bindParam(':id_empleado', $id_empleado, PDO::PARAM_INT);
$query_empleados->execute();
$empleados = $query_empleados->fetchAll(PDO::FETCH_ASSOC);

if (count($empleados) > 0) {
    $empleado = $empleados[0];
    $nombres = $empleado['nombres'];
    $apellidos = $empleado['apellidos'];
    $cedula = $empleado['cedula'];
    $rif = $empleado['rif'];
    $fecha_nacimiento = $empleado['fecha_nacimiento'];
    $sexo = $empleado['sexo'];
    $telefono = $empleado['telefono'];
    $email = $empleado['email'];
    $direccion = $empleado['direccion'];
    $estado_civil = $empleado['estado_civil'];
    $cargo = $empleado['cargo'];
    $departamento = $empleado['departamento'];
} else {
    echo "No se encontró el empleado con ID: " . $id_empleado;
    exit;
}
?>