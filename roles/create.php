<?php
include ('../app/config.php');

include ('../layout/sesion.php');

include ('../layout/parte1.php');


?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-10">
            <h1 class="m-0">Registro de un nuevo rol</h1>
           </div>
          </div>
        </div>
      </div>
            <div class="content">
              <div class="container-fluid">
              <div class= "col-md-5">
  <div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Usuarios registrados</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
</button>
</div>
</div>

<div class="card-body" style="display:block;">
<div class="row">
  <div class="col-md-12">
  <form action="../app/controllers/roles/create.php" method="post">
  <div class="form-group">
    <label for="Nombres">Nombre del Rol</label>
    <input type="text" name="rol" class="form-control" 
    placeholder="Escriba aquí el rol...."required>
 <hr>
  <div class="form-group">
    <a href="index.php" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
    </tbody>
  </tr>
</table>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('../layout/mensajes.php');?>
  <?php include('../layout/parte2.php');?>
