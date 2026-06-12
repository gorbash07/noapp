<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMPLEADOS</title>
    <link rel="stylesheet" href="../../public/css/empleados.css">
</head>
<body>

<?php 
include ('../../model/conexion.php'); 
include ('../../consultas/empleados/listado_empleados.php'); 

if (!isset($empleados)) {
    exit; 
}
?>

<div class="content-wrapper">
    <br>
    <div class="content">
        <div class="container">
            <div class="row">
                <h1 class="text1">Listado de empleados</h1><br>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="header-tabla">
                        <h3 class="text2">Empleados registrados</h3>
                        <a href="views/create.php" class="create">Empleados +</a>
                    </div>
                    <hr>
                    <div class="tabla-wrapper">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>NRO</th>
                                    <th>NOMBRE</th>
                                    <th>APELLIDO</th>
                                    <th>DNI</th>
                                    <th>RIF</th>
                                    <th>FECHA DE NACIMIENTO</th>
                                    <th>SEXO</th>
                                    <th>TLF</th>
                                    <th>EMAIL</th>
                                    <th>DIRECCIÓN</th>
                                    <th>ESTADO CIVIL</th>
                                    <th>CARGO</th>
                                    <th>DEPARTAMENTO</th>
                                    <th>ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $contador_empleado = 0; 
                                foreach ($empleados as $empleado) {
                                    $id_empleado = $empleado['id_empleado'];
                                    $contador_empleado++; ?>
                                    <tr>
                                        <td><?= $contador_empleado; ?></td>
                                        <td><?= $empleado['nombres'] ?></td>
                                        <td><?= $empleado['apellidos'] ?></td> 
                                        <td><?= $empleado['cedula']; ?></td>
                                        <td><?= $empleado['rif']; ?></td>
                                        <td><?= $empleado['fecha_nacimiento']; ?></td>
                                        <td><?= $empleado['sexo']; ?></td>
                                        <td><?= $empleado['telefono']; ?></td>
                                        <td><?= $empleado['email']; ?></td>
                                        <td><?= $empleado['direccion']; ?></td>
                                        <td><?= $empleado['estado_civil']; ?></td>
                                        <td><?= $empleado['cargo']; ?></td>
                                        <td><?= $empleado['departamento']; ?></td>
                                        <td class="acciones">
                                            <a href="views/show.php?id_empleado=<?= $id_empleado; ?>" class="btn-ver">Ver</a>
                                            <a href="views/edit.php?id_empleado=<?= $id_empleado; ?>" class="btn-editar">Editar</a>
                                            <form action="<?= APP_URL; ?>/app/empleados/controllers/delete.php" method="post" class="form-eliminar">
                                                <input type="text" name="id_empleado" value="<?= $id_empleado; ?>" hidden>
                                                <button type="submit" class="btn-eliminar">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>