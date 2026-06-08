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
                <h1>Empleado: <?=$nombres ?? '';?> <?=$apellidos ?? '';?></h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Datos registrados</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Nombre</label>
                                                <p class="form-control"><?= $nombres ?? ''; ?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Apellido</label>
                                                <p class="form-control"><?=$apellidos ?? '';;?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">DNI</label>
                                                <p class="form-control"><?=$cedula ?? '';;?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">RIF</label>
                                                <p class="form-control"><?=$rif ?? '';;?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Fecha de nacimiento</label>
                                                <p class="form-control"><?=$fecha_nacimiento ?? '';;?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="sexo">Sexo</label>
                                                <p class="form-control"><?=$sexo ?? '';;?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Teléfono</label>
                                                <p class="form-control"><?=$telefono ?? '';;?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <p class="form-control"><?=$email ?? '';;?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Dirección</label>
                                                <p class="form-control"><?=$direccion ?? '';;?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="estado_civil">Estado civil</label>
                                                <p class="form-control"><?=$estado_civil ?? '';;?></p>
                                            </div>
                                        </div>
                                         <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Cargo</label>
                                                <p class="form-control"><?=$cargo ?? '';;?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Departamento</label>
                                                <p class="form-control"><?=$departamento ?? '';;?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <a href="<?= APP_URL;?>/app/empleados/index.php" class="btn btn-secondary">Volver</a>
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


