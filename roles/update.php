<?php
include ('../app/config.php');

include ('../layout/sesion.php');

include ('../layout/parte1.php');

include ('../app/controllers/roles/update_roles.php');

?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-10">
            <h1 class="m-0">Edición de un Rol</h1>
           </div>
          </div>
        </div>
      </div>
            <div class="content">
              <div class="container-fluid">
              <div class= "col-md-5">
  <div class="card card-success">
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
  <form action="../app/controllers/roles/update.php" method="post">
  <div class="form-group">
    <input type="text" name="id_rol" value="<?php echo $id_rol_get;?>"hidden>
    <label for="Nombres">Nombre del Rol</label>
    <input type="text" name="rol" class="form-control" 
    placeholder="Escriba aquí el rol...." value="<?php echo $rol;?>"required>
 <hr>
  <div class="form-group">
    <a href="index.php" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Actualizar</button>
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

