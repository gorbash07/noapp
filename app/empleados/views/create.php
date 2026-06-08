<?php 
include ('../../../model/conexion.php'); 
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <br>
    <div class="content">
      <div class="container">
        <div class="row">
        <h1>Creación de un nuevo empleado</h1>
        </div>
        <div class="row">
          <div class = "col-md-12">
            <div class="card card-outline card-dark">
              <div class="card-header">
                <h3 class="card-title">Complete los datos</h3>
              </div>
              <div class="card-body">
              <form action="<?= APP_URL;?>/app/empleados/controllers/create_controller.php" method="POST">
               <div class="row">
               <div class="col-md-12">
               <div class="row">
                <div class="col-md-3">
                      <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" name="nombres" class="form-control">
                      </div>
                </div>
                <div class="col-md-3">
                      <div class="form-group">
                        <label for="">Apellido</label>
                        <input type="text" name="apellidos" class="form-control">
                      </div>
                </div>
            </div>
            <div class="row">
            <div class="col-md-3">
                      <div class="form-group">
                        <label for="">Cédula de identidad</label>
                        <input type="number" name="cedula" class="form-control">
                      </div>
                 </div>
            <div class="col-md-3">
                      <div class="form-group">
                        <label for="">RIF</label>
                        <input type="text" name="rif" class="form-control">
                      </div>
                </div>
                <div class="col-md-3">
                      <div class="form-group">
                        <label for="">Fecha de nacimiendo</label>
                        <input type="date" name="fecha_nacimiento" class="form-control">
                      </div>
                </div>
                <div class="col-md-3">
              <div class="form-group">
            <label for="sexo">Sexo</label>
                   <select name="sexo" class="form-control">
                      <option value="" disabled selected>Seleccione...</option>
                      <option value="M">Masculino</option>
                      <option value="F">Femenino</option>
                   </select>
                </div>
              </div>
                <div class="col-md-3">
                      <div class="form-group">
                        <label for="">Telefono</label>
                        <input type="number" name="telefono" class="form-control">
                      </div>
                 </div>
            </div>
            <div class="row">
            <div class="col-md-3">
                      <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control">
                      </div>
                </div>
                <div class="col-md-3">
                      <div class="form-group">
                        <label for="">Dirección</label>
                        <input type="text" name="direccion" class="form-control">
                      </div>
                </div>
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
            <div class="form-group"> 
                  <label for="estado_civil">Estado civil</label> 
                  <div class="form-inline"> 
                      <select name="estado_civil" id="estado_civil" class="form-control" style="width: 198px"> 
                      <!-- Opción por defecto vacía -->
                      <option value="" disabled selected>Seleccione...</option>
            
                   <?php foreach ($estado_civil as $estado) { ?> 
                          <option value="<?=$estado['estado_civil'];?>" <?=$estado['estado_civil']=="Soltero/a" ? 'selected' : '';?> >
                         <?=$estado['estado_civil'];?>
                   </option> 
                    <?php } ?> 
                   </select> 
             </div> 
           </div>
             <div class="row">
                <div class="col-md-3">
                      <div class="form-group">
                        <label for="">Cargo</label>
                        <input type="text" name="cargo" class="form-control">
                      </div>
                </div>
               </div>
               <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Departamento</label>
                    <input type="text" name="departamento" class="form-control">
                  </div>
              </div>
            </div>
           </div>
              <hr>
              <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                           <button type="submit">Registrar</button>
                           <a href="<?= APP_URL;?>/app/empleados/index.php">Cancelar</a>
                      </div>
                </div>
              </div>
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

