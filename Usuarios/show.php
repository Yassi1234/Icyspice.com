<?php
include ('../app/config.php');

include ('../layout/sesion.php');

include ('../layout/parte1.php');

  include ('../app/controllers/usuarios/show_usuario.php');
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-10">
            <h1 class="m-0">Datos del usuario </h1>
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
  <form action="../app/controllers/usuarios/create.php" method="post">
  <div class="form-group">
    <label for="Nombres">Nombres:</label>
    <input type="text" name="nombres" class="form-control" value="<?php echo $nombres ;?>"disabled>
  </div>
  <div class="form-group">
    <label for="Email">Email:</label>
    <input type="email" name="email" class="form-control" value="<?php echo $email ;?>"disabled >
  <div class="form-group">
  </div>
  <div class="form-group">
    <label for="">Rol del usuario:</label>
    <input type="text" name="email" class="form-control" value="<?php echo $rol ;?>"disabled >
  <div class="form-group">
<hr>
    <a href="index.php" class="btn btn-secondary">Volver</a>
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
  <?php include('../layout/parte2.php');?>
  <?php include('../layout/mensajes.php');?>