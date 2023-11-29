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
            <h1 class="m-0">Eliminar usuario </h1>
           </div>
          </div>
        </div>
      </div>
            <div class="content">
              <div class="container-fluid">
              <div class= "col-md-5">
  <div class="card card-danger">
<div class="card-header">
<h3 class="card-title">¿Esta seguro de eliminar al usuario ?</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
</button>
</div>
</div>
<form action="../app/controllers/usuarios/delete_usuarios.php"  method="post">
     <input type="text"  name="id_usuario" value="<?php echo $id_usuario_get; ?>"hidden>


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
<hr>
    <a href="index.php" class="btn btn-secondary">Volver</a>

</form>
    <button class="btn btn-danger">Eliminar</button>
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