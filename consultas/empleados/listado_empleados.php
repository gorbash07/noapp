<?php
include ('../../model/conexion.php');

$sql_empleados = "SELECT * FROM empleados"; 

$query_empleados = $pdo->prepare($sql_empleados);
$query_empleados->execute();
$empleados = $query_empleados->fetchAll(PDO::FETCH_ASSOC);