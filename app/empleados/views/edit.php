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
include ('../../../model/conexion.php'); 
include ('../../../consultas/empleados/datos_empleados.php'); 

// Verifica si los datos del empleado están disponibles
if (!isset($nombres)) {
    die("Error: No se encontraron datos del empleado.");
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <br>
    <div class="content">
        <div class="container">
            <div class="row">
                <h1 class="text1">Empleados: <?= $nombres ?? '';?> <?= $apellidos ?? '';?></h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-warning">
                        <div class="card-header">
                            <h3 class="text2">Complete los datos</h3>
                        </div>
                        <div class="card-body">
                            <form action="<?= APP_URL;?>/app/empleados/controllers/update.php" method="POST">
                                <input type="hidden" name="id_empleado" value="<?= $id_empleado ?>">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Nombre</label>
                                                    <input type="text" name="nombres" class="form-control" value="<?= $nombres; ?>">

                                                    <label for="">Apellido</label>
                                                    <input type="text" name="apellidos" class="form-control" value="<?= $apellidos ?? ''; ?>">

                                                     <label for="">DNI</label>
                                                    <input type="number" name="cedula" class="form-control" value="<?= $cedula ?? ''; ?>">

                                                     <label for="">RIF</label>
                                                    <input type="text" name="rif" class="form-control" value="<?= $rif ?? ''; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Fecha de nacimiento</label>
                                                    <input type="date" name="fecha_nacimiento" class="form-control" value="<?= $fecha_nacimiento ?? ''; ?>">

                                                    <label for="sexo">Sexo</label>
                                                    <select name="sexo" class="form-control">
                                                       <option value="" disabled <?= empty($sexo) ? 'selected' : ''; ?>>Seleccione...</option>
                                                       <option value="M" <?= (($sexo ?? '') == 'M') ? 'selected' : ''; ?>>Masculino</option>
                                                       <option value="F" <?= (($sexo ?? '') == 'F') ? 'selected' : ''; ?>>Femenino</option>
                                                   </select> 

                                                   <label for="">Teléfono</label>
                                                    <input type="number" name="telefono" class="form-control" value="<?= $telefono ?? ''; ?>">

                                                    <label for="">Email</label>
                                                    <input type="email" name="email" class="form-control" value="<?= $email ?? ''; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                <?php
                                       // Se define el arreglo con las opciones
                                        $opciones_estado_civil = [
                                              ['estado_civil' => 'Soltero/a'],
                                              ['estado_civil' => 'Casado/a'],
                                              ['estado_civil' => 'Divorciado/a'],
                                              ['estado_civil' => 'Viudo/a'],
                                              ['estado_civil' => 'Concubinato']
                                        ];
                                        $estado_civil_db = $estado_civil ?? ''; 
                                        ?>
                                        <div class="form-group"> 
                                            <label for="estado_civil">Estado civil</label> 
                                                <select name="estado_civil" id="estado_civil" class="form-control"> 
                                                    <option value="" disabled <?= empty($estado_civil_db) ? 'selected' : ''; ?>>Seleccione...</option>
                                                    <?php foreach ($opciones_estado_civil as $estado) { 
                                                        // Comparamos el valor del array con el valor guardado en la base de datos
                                                        $selected = ($estado['estado_civil'] == $estado_civil_db) ? 'selected' : ''; 
                                                        ?> 
                                                        <option value="<?= $estado['estado_civil']; ?>" <?= $selected; ?>>
                                                            <?= $estado['estado_civil']; ?>
                                                        </option> 
                                                        <?php } ?> 
                                                    </select>

                                                   <label for="">Dirección</label>
                                                    <input type="text" name="direccion" class="form-control" value="<?= $direccion ?? ''; ?>">
                                                    
                                                    <label for="">Cargo</label>
                                                    <input type="text" name="cargo" class="form-control" value="<?= $cargo ?? ''; ?>">

                                                    <label for="">Departamento</label>
                                                    <input type="text" name="departamento" class="form-control" value="<?= $departamento ?? ''; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button type="submit" id="btn-registrar">Actualizar</button>
                                                    <a href="<?= APP_URL;?>/app/empleados/index.php" id="btn-cancelar">Cancelar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
</body>
</html>