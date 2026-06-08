<?php
include ('../../../model/conexion.php'); 

$id_empleado = $_POST['id_empleado'];


$sentencia = $pdo->prepare("DELETE FROM empleados WHERE id_empleado=:id_empleado");
$sentencia->bindParam('id_empleado', $id_empleado);

    if ($sentencia->execute()){
        session_start(); 
        echo "Se borro con exito";
        header('Location: ' .APP_URL."/app/empleados/index.php");
     } else {
         session_start(); 
         $_SESSION['mensaje'] = "Error al eliminar"; 
         $_SESSION['icono'] = "error";
         header('Location: ' .APP_URL."/app/empleados/index.php");
     } 

   