<?php

include('../../../model/conexion.php');

$id_empleado = $_POST['id_empleado'];

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

$pdo->beginTransaction();

$sentencia = $pdo->prepare('UPDATE empleados
SET    nombres=:nombres, 
       apellidos=:apellidos,
       cedula=:cedula, 
       rif=:rif, 
       fecha_nacimiento=:fecha_nacimiento, 
       sexo=:sexo, 
       telefono=:telefono, 
       email=:email, 
       direccion=:direccion, 
       estado_civil=:estado_civil,  
       cargo=:cargo,
       departamento=:departamento 
WHERE  id_empleado=:id_empleado');

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

$sentencia->bindParam(':id_empleado', $id_empleado); 

if ($sentencia->execute()) {
    $pdo->commit();
    session_start(); 
    //echo "Actualizado";
    header('Location: ' . APP_URL . "/app/empleados/index.php");
} else {
    $pdo->rollBack();
    session_start(); 
    echo "Error al actualizar";
    ?><script>window.history.back();</script><?php   
}
?>