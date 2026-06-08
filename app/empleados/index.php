<?php 
include ('../../model/conexion.php'); 
include ('../../consultas/empleados/listado_empleados.php'); 


if (!isset($empleados)) {
    //echo "La variable empleados no está definida.";
    exit; 
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <br>
    <div class="content">
        <div class="container">
            <div class="row">
                <h1>Listado de empleados</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3>Empleados registrados</h3><br>
                    <div>
                        <a href="views/create.php">Crear nuevo empleado</a>
                    </div>
                    <div>
                        <table id="example1">
                            <thead>
                                <tr>
                                    <th>Nro</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>DNI</th>
                                    <th>RIF</th>
                                    <th>Fecha de nacimiento</th>
                                    <th>Sexo</th>
                                    <th>TLF</th>
                                    <th>Email</th>
                                    <th>Direccion</th>
                                    <th>Estado civil</th>
                                    <th>Departamento</th>
                                    <th>Cargo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $contador_empleado = 0; 
                                foreach ($empleados as $empleado) {
                                    $id_empleado = $empleado['id_empleado'];
                                    $contador_empleado++; ?>
                                    <tr>
                                        <td><?=$contador_empleado;?></td>
                                        <td><?=$empleado['nombres']?></td>
                                        <td><?=$empleado['apellidos']?></td> 
                                        <td><?=$empleado['cedula'];?></td>
                                        <td><?=$empleado['rif'];?></td>
                                        <td><?=$empleado['fecha_nacimiento'];?></td>
                                        <td><?=$empleado['sexo'];?></td>
                                        <td><?=$empleado['telefono'];?></td>
                                        <td><?=$empleado['email'];?></td>
                                        <td><?=$empleado['direccion'];?></td>
                                        <td><?=$empleado['estado_civil'];?></td>
                                        <td><?=$empleado['cargo'];?></td>
                                        <td><?=$empleado['departamento'];?></td>
                                        <td>
                                            <div>
                                                <a href="views/show.php?id_empleado=<?=$id_empleado;?>">Ver</a>
                                                <a href="views/edit.php?id_empleado=<?=$id_empleado;?>">Editar</a>
                                                <form action="<?=APP_URL;?>/app/empleados/controllers/delete.php" method="post" id="miFormulario<?=$id_empleado;?>">
                                                    <input type="text" name="id_empleado" value="<?=$id_empleado;?>" hidden>
                                                    <button type="submit">Eliminar</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Page specific script -->
