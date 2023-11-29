<?php
include ('../app/config.php');

include('../app/controllers/categorias/listado_de_categorias.php');

include ('../layout/sesion.php');

include ('../layout/parte1.php');

include ('../layout/mensajes.php');

?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <h1 class="m-0">Listado de categorías
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create">
            <i class="fa fa-plus"></i> Agregar Nuevo
            </button>
            </h1>
           </div>
          </div>
        </div>
      </div>

<div class="content">
<div class="container-fluid">

<div class="row">
  <div class= "col-md-6">
  <div class="card card-outline card-primary">
<div class="card-header">
<h3 class="card-title">Categorías Registradas </h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
</button>
</div>

</div>
<br>
<table id="example1" class="table table-bordered table-striped">
     <thead>
     <tr>
    <th><center>Nro</center></th>
    <th><center>Nombre de la Categoría</center></th>
    <th><center>Acciones</center></th>
    </tr>
   </thead>
   <tbody>
     <?php
     $contador = 0;
     foreach($categorias_datos as $categorias_dato){
      $id_categoria = $categorias_dato['id_categoria'];
      $nombre_categoria = $categorias_dato['nombre_categoria'];?>
     <tr>
      <td><center><?php echo $contador = $contador + 1;?></center></td>
      <td><?php echo $categorias_dato['nombre_categoria'];?></td>
      <td>
      <center>
      <div class="btn-group">
  <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-update<?php echo $id_categoria;?>">
    <i class="fa fa-pencil-alt "></i> Editar
  </button>

    </button>
         <!-- Modal para actualizar categoría s -->
   <div class="modal fade" id="modal-update<?php echo $id_categoria;?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header"  style="background-color:lightgreen">
          <h4 class="modal-title">Actualización de la categoría</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="nombre_categoria">Nombre de la categoría</label>
                <input type="text" id="nombre_categoria<?php echo $id_categoria; ?>" value ="<?php echo $nombre_categoria; ?>" class="form-control">
                <small style="color: red;display: none" id="lbl_update<?php echo $id_categoria; ?>">* Este campo es requerido </small>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success" id="btn_update<?php echo $id_categoria; ?>">Actualizar categoría</button>
              </div>
            </div>
          </div>
        </div>
</div>
    </div>
  </div>
</div>
<script>

$('#btn_update<?php echo $id_categoria;?>').click(function (){

  var nombre_categoria = $('#nombre_categoria<?php echo $id_categoria; ?>').val();
  var id_categoria = '<?php echo $id_categoria; ?>';

  if(nombre_categoria == ""){
    $('#nombre_categoria<?php echo $id_categoria;?>').focus();
     $('#lbl_update<?php echo $id_categoria;?>').css('display','block');

  }else{
    var url = "../app/controllers/categorias/update_de_categorias.php";
 $.get(url,{nombre_categoria:nombre_categoria, id_categoria: id_categoria}, function (datos) {
  $('#respuesta_update<?php echo $id_categoria; ?>').html(datos);

})
  }
});
</script>
<div id="respuesta_update<?php echo $id_categoria; ?>"></div>

  </div>
</center>
    </td>
     </tr>
      <?php
     }
     ?>
    </tbody>
<tfoot>
    <th><center>Nro</center></th>
    <th><center>Nombre de la Categoría</center></th>
    <th><center>Acciones</center></th>
    </tfoot>
    </table>  
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
    </div>
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
  <?php include ('../layout/parte2.php');?>
  <script>
  $(function () {
    $("#example1").DataTable({
      "pageLength": 10,
      "language": {
        "emptyTable": "No hay información",
        "decimal": "",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Categorías",
        "infoEmpty": "Mostrando 0 a 0 a 0 Categorías",
        "infoFiltered": "(Filtrado de _MAX_ total Categorías)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Categorías",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscador:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
          "first": "Primero",
          "last": "Ultimo",
          "next": "Siguiente",
          "previous": "Anterior"
        }
      },
      "responsive": true,
      "lengthChange": true,
      "autoWidth": false,
      "buttons": [{
          extend: 'collection',
          text: 'Reportes',
          orientation: 'landscape',
          buttons: [{
              text: 'Copiar',
              extend: 'copy',
            },
            {
              extend: 'pdf'
            },
            {
              extend: 'csv'
            },
            {
              extend: 'excel'
            },
            {
              text: 'Imprimir',
              extend: 'print'
            }
          ]
        },
        {
          extend: 'colvis',
          text: 'Visor de columnas',
          collectionLayout: 'fixed three-column'
        }
      ]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>


    <!-- /.modal para resgistrar categorias -->
<div class="modal fade" id="modal-create">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" style="background-color:aqua">
              <h4 class="modal-title">Creación de una nueva categoría</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
              <div class="col-md-12">
              <div class="form-group">
                <label for="">Nombre de la categoría <b>*</b></label>
                <input type="text" id="nombre_categoria" class="form-control">
                <small style="color: red;display: none" id="lbl_create">* Este campo es requerido </small>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-info" id="btn_create">Guardar categoría</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
      <script>
        $('#btn_create').click(function() {
          //alert("guardar")
          var nombre_categoria =$('#nombre_categoria').val();

          if(nombre_categoria == ""){
            $('#nombre_categoria').focus();
            $('#lbl_create').css('display','block');

          }else{
          var url = "../app/controllers/categorias/registro_de_categorias.php";
          $.get(url,{nombre_categoria:nombre_categoria},function(datos){
            $('#respuesta').html(datos);

          });

        }
        });

</script>
<div id="respuesta"></div>

