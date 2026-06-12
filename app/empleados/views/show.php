<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CREAR EMPLEADO</title>
  <link rel="stylesheet" href="../../../public/css/formularios.css">
</head>
<body>

<?php 
$id_empleado = isset($_GET['id_empleado']) ? $_GET['id_empleado'] : 0;
include('../../../model/conexion.php');
include ('../../../consultas/empleados/datos_empleados.php');
?>
 <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <br>
    <div class="content">
        <div class="container">
            <div class="row">
                <h1 class="text1">Empleado: <?=$nombres ?? '';?> <?=$apellidos ?? '';?></h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="text2">Datos registrados</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Nombre</label>
                                                <p class="form-control"><?= $nombres ?? ''; ?></p>

                                                <label for="">Apellido</label>
                                                <p class="form-control"><?=$apellidos ?? '';;?></p>

                                                 <label for="">DNI</label>
                                                <p class="form-control"><?=$cedula ?? '';;?></p>

                                                <label for="">RIF</label>
                                                <p class="form-control"><?=$rif ?? '';;?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">


                                                
                                            </div>
                                        </div>
                                       
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Fecha de nacimiento</label>
                                                <p class="form-control"><?=$fecha_nacimiento ?? '';;?></p>

                                                 <label for="sexo">Sexo</label>
                                                <p class="form-control"><?=$sexo ?? '';;?></p>

                                                 <label for="">Teléfono</label>
                                                <p class="form-control"><?=$telefono ?? '';;?></p>

                                                <label for="">Email</label>
                                                <p class="form-control"><?=$email ?? '';;?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Dirección</label>
                                                <p class="form-control"><?=$direccion ?? '';;?></p>

                                                 <label for="estado_civil">Estado civil</label>
                                                <p class="form-control"><?=$estado_civil ?? '';;?></p>

                                                <label for="">Cargo</label>
                                                <p class="form-control"><?=$cargo ?? '';;?></p>

                                                <label for="">Departamento</label>
                                                <p class="form-control"><?=$departamento ?? '';;?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <a href="<?= APP_URL;?>/app/empleados/index.php" id="btn-registrar">Volver</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div><!-- /.card-body -->
                    </div><!-- /.card -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /.content -->
</div><!-- /.content-wrapper -->
</body>
</html>

