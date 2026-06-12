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
include ('../../../model/conexion.php'); 
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <br>
    <div class="content">
      <div class="container">
        <div class="row">
        <h1 class="text1">Creación de un nuevo empleado</h1><br><br>
        </div>
        <div class="row">
          <div class = "col-md-12">
            <div class="card card-outline card-dark">
              <div class="card-header">
                <h3 class="text2">Complete los datos</h3>
              </div>
              <div class="card-body">
              <form action="<?= APP_URL;?>/app/empleados/controllers/create_controller.php" method="POST">
               <div class="row">
               <div class="col-md-12">
               <div class="row">
                <div class="col-md-6">
                      <div class="form-group">
                       <div class=inputs>
                         <label for="">NOMBRE</label>
                        <input type="text" name="nombres" class="form-control" id="name">

                         <label for="">APELLIDO</label>
                        <input type="text" name="apellidos" class="form-control" id="lastname">

                        <label for="">CÉDULA DE IDENTIDAD</label>
                        <input type="number" name="cedula" class="form-control" id="dni">

                        <label for="">RIF</label>
                        <input type="text" name="rif" class="form-control" id="rif">
                       </div>
                      </div>
                </div>
            </div>
            <br>
            <div class="row">
            <div class="col-md-3">
                      <div class="form-group">
                      <div class="inputs">
                        <label for="">FECHA DE NACIMIENTO</label>
                        <input type="date" name="fecha_nacimiento" class="form-control" id="fn">
           <label for="sexo">SEXO</label>
                  <select name="sexo" class="form-control" id="sexo">
                      <option value="" disabled selected>Seleccione...</option>
                      <option value="M">Masculino</option>
                     <option value="F">Femenino</option>
                  </select>
                         <label for="">TELÉFONO</label>
                        <input type="number" name="telefono" class="form-control" id="tlf">

                        <label for="">EMAIL</label>
                        <input type="email" name="email" class="form-control" id="email">
                      </div>
                      </div>
                </div>
            </div>
            <br>
            <div class="row">
            <div class="col-md-3">
                      <div class="form-group">
                        <div class="inputs">
                      <label for="">DIRECCIÓN</label>
                      <input type="text" name="direccion" class="form-control" id="dir">      
            <?php
            // Se define el arreglo con las opciones
            $estado_civil = [
                  ['estado_civil' => 'Soltero/a'],
                  ['estado_civil' => 'Casado/a'],
                  ['estado_civil' => 'Divorciado/a'],
                  ['estado_civil' => 'Viudo/a'],
                  ['estado_civil' => 'Concubinato']
                  ];
                  ?>
            <label for="estado_civil">ESTADO CIVIL</label> 
             <select name="estado_civil" id="estado_civil" class="form-control">
                <option value="" disabled selected>Seleccione...</option>
                  <?php foreach ($estado_civil as $estado) { ?> 
                  <option value="<?=$estado['estado_civil'];?>" <?=$estado['estado_civil']=="Soltero/a" ? 'selected' : '';?> >
                  <?=$estado['estado_civil'];?>
              </option> 
            <?php } ?> 
          </select>
                   <label for="">CARGO</label>
                    <input type="text" name="cargo" class="form-control" id="cargo">

                    <label for="">DEPARTAMENTO</label>
                    <input type="text" name="departamento" class="form-control" id="dep">
                        </div>
                      </div>
                </div>       
            </div>
           </div>
           <br><br>
              <hr>
              <td class="acciones">
                <button type="submit" id="btn-registrar">Registrar</button>
                <a href="<?= APP_URL;?>/app/empleados/index.php" id="btn-cancelar">Cancelar</a>
              </td>
            </div>
          </form>
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