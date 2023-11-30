<?php
include ('../app/config.php');
include ('../layout/sesion.php');

include ('../layout/parte1.php');

include ('../app/controllers/ventas/listado_de_ventas.php');
include ('../app/controllers/almacen/listado_de_productos.php');

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Ventas</h1>
                    
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

                    

                <div class="content">
                <div class="container fluid">

<div class="row">
                <div class="col-sm-12">
                    <div class="card card-outline card-primary">
                    <div class="card-header">
                        <?php
                        $contador_de_ventas = 0;
                        foreach ($ventas_datos as $ventas_dato){
                            $contador_de_ventas = $contador_de_ventas +1;
                        } ?>
                    <h3 class="card-title"> <i class= " fa fa-shopping-bag"></i>Ventas Nro
                    <input type="text" style="text-align: center" value="<?php echo $contador_de_ventas + 1; ?>"disabled></h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
</button>
                    </div>
                    </div>
<div class="card-body">
    <b>Carrito</b><div class="card-body" style="display: block;">
                                   <div style="display: flex">
                                       <div style="width: 20px"></div>
                                       <button type="button" class="btn btn-primary" data-toggle="modal"
                                               data-target="#modal-buscar_producto">
                                           <i class="fa fa-search"></i>
                                           Buscar producto
                                       </button>
<div class="modal fade" id="modal-buscar_producto">
                                           <div class="modal-dialog modal-lg">
                                               <div class="modal-content">
                                                   <div class="modal-header" style="background-color: #1d36b6;color: white">
                                                       <h4 class="modal-title">Busqueda del producto</h4>
                                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                           <span aria-hidden="true">&times;</span>
                                                       </button>
                                                   </div>
                                                   <div class="modal-body">
                                                       <div class="table table-responsive">
                                                           <table id="example1" class="table table-bordered table-striped table-sm">
                                                               <thead>
                                                               <tr>
                                                                   <th><center>Nro</center></th>
                                                                   <th><center>Selecionar</center></th>
                                                                   <th><center>Código</center></th>
                                                                   <th><center>Categoría</center></th>
                                                                   <th><center>Imagen</center></th>
                                                                   <th><center>Nombre</center></th>
                                                                   <th><center>Descripción</center></th>
                                                                   <th><center>Stock</center></th>
                                                                   <th><center>Precio compra</center></th>
                                                                   <th><center>Precio venta</center></th>
                                                                   <th><center>Fecha compra</center></th>
                                                                   <th><center>Usuario</center></th>
                                                               </tr>
                                                               </thead>
                                                               <tbody>
                                                               <?php
                                                               $contador = 0;
                                                               foreach ($productos_datos as $productos_dato){
                                                                   $id_producto = $productos_dato['id_producto']; ?>
                                                                   <tr>
                                                                       <td><?php echo $contador = $contador + 1; ?></td>
                                                                       <td>
                                                                           <button class="btn btn-info" id="btn_selecionar<?php echo $id_producto;?>">
                                                                               Selecionar
                                                                           </button>
                                                                           <script>
                                                                               $('#btn_selecionar<?php echo $id_producto;?>').click(function () {


                                                                                   var producto = "<?php echo $productos_dato['nombre'];?>";
                                                                                   $('#producto').val(producto);

                                                                                   var descripcion = "<?php echo $productos_dato['descripcion'];?>";
                                                                                   $('#descripcion').val(descripcion);

                                                                                   var precio_venta = "<?php echo $productos_dato['precio_venta'];?>";
                                                                                   $('#precio_venta').val(precio_venta);

                                                                                   $('$cantidad').focus();

                                                                                   $('#modal-buscar_producto').modal('toggle');

                                                                               });
                                                                           </script>
                                                                       </td>
                                                                       <td><?php echo $productos_dato['codigo'];?></td>
                                                                       <td><?php echo $productos_dato['categoria'];?></td>
                                                                       <td>
                                                                           <img src="<?php echo $URL."/almacen/img_productos/".$productos_dato['imagen'];?>" width="50px" alt="asdf">
                                                                       </td>
                                                                       <td><?php echo $productos_dato['nombre'];?></td>
                                                                       <td><?php echo $productos_dato['descripcion'];?></td>
                                                                       <td><?php echo $productos_dato['stock'];?></td>
                                                                       <td><?php echo $productos_dato['precio_compra'];?></td>
                                                                       <td><?php echo $productos_dato['precio_venta'];?></td>
                                                                       <td><?php echo $productos_dato['fecha_ingreso'];?></td>
                                                                       <td><?php echo $productos_dato['email'];?></td>
                                                                   </tr>
                                                                   <?php
                                                               }
                                                               ?>
                                                               </tbody>
                                                               </tfoot>

                                                           </table>
                                                           <div class="row"
                                                           <div class="col-md-3">
                                                            <div class="form-group"
                                                            <label for="">Producto</label>
                                                            <input type="text" id="producto" class="form-control"disabled>
            
                                                       </div>
                                                   </div>

                                                <div class="col-md-5"></div>          
                                                <div class="form-group"
                                                            <label for="">Descripción</label>
                                                            <input type="text" id="descripcion" class="form-control"disabled>
            
                                                       </div>
                                                   </div>

                                                      <div class="col-md-2"></div>   
                                                        <div class="form-group"
                                                            <label for="">Cantidad</label>
                                                            <input type="text"  id="cantidad" class="form-control">
        
                                                       </div>
                                                   </div>
                                                      <div class="col-md-2"></div>   
                                                <div class="form-group"
                                                            <label for="">Precio unitario</label>
                                                            <input type="text" id="precio_venta" class="form-control"disabled>
            
                                                       </div>
                                                   </div>
                                    </div>
                                 <br><br>
                                    <button style="float: right" class="btn-btn-primary">Registrar</button>
                                               <!-- /.modal-content -->
                                           </div>
                                           <!-- /.modal-dialog -->
                                       </div>

                                       <br><br>
                                       <duv class="table-responsive">
                                        <table class="table table-bordered table-sm table-hover  table-striped"
                                        <thead>
                                      <tr>
                                       <th style="background-color: Blue;text-align: center">NRO:</th>
                                       <th style="background-color: Blue;text-align:center">Producto:</th>
                                       <th style="background-color: Blue;text-align: center">Detalle:</th>
                                       <th style="background-color: Blue;text-align: center">Cantidad:</th>
                                       <th style="background-color: Blue;text-align: center">Precio unitario:</th>
                                       <th  style="background-color: Blue;text-align: center">Precio Subtotal</th>
                                       <th  style="background-color: Blue;text-align: center">Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody><tr>
                                   <td><center>1</center></td>
                                   <td>Gaseosa</td>
                                  <td>Coca quina</td>
                                  <td><center>2</center></td>         
                                  <td><center>5</center></td>
                                  <td><center>10</center></td>
                                  <td> <center><a href="" class="btn btn-danger btn-sm"> <i class="fa fa-trash"</a></center></td>
                                  </tr>
                                  </tr>
                                    </thead>
                                    <tbody><tr>
                                   <td><center>1</center></td>
                                   <td>Gaseosa</td>
                                  <td>Coca quina</td>
                                  <td><center>2</center></td>         
                                  <td><center>5</center></td>
                                  <td><center>10</center></td>
                                  <tr>
                                  <th colspan="3" style="background-color: e7e7e7;text-align: right">Total</th>
                           <th><center>4</center></th>
                           <th><center>10</center></th>
                           <th><center>20</center></th>
                        </tr>
                                    </tbody>
                                          </table>
                                       <!-- /.modal -->
                                   </div>

    
    
    
    
</div>
                    </div>
                    </div>
                    </div>
                    
                <div class="content">
                <div class="container fluid">

<div class="row">
                <div class="col-sm-12">
                    <div class="card card-outline card-primary">
                    <div class="card-header">
                    <h3 class="card-title"> <i class= " fa fa-shopping-bag"></i>Ventas Nro
                    <input type="text" style="text-align: center" value="1"disabled></h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
</button>
                    </div>
                    </div>
<div class="card-body">
    asdf
</div>
                    </div>
                    </div>
                    </div>

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>

<?php include ('../layout/mensajes.php'); ?>
<?php include ('../layout/parte2.php'); ?>



<script>
    $(function () {
        $("#example1").DataTable({
            "pageLength": 5,
            "language": {
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Productos",
                "infoEmpty": "Mostrando 0 a 0 de 0 Productos",
                "infoFiltered": "(Filtrado de _MAX_ total Productos)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Productos",
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
            "responsive": true, "lengthChange": true, "autoWidth": false,

        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });


    $(function () {
        $("#example2").DataTable({
            "pageLength": 5,
            "language": {
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Proveedores",
                "infoEmpty": "Mostrando 0 a 0 de 0 Proveedores",
                "infoFiltered": "(Filtrado de _MAX_ total Proveedores)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Proveedores",
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
            "responsive": true, "lengthChange": true, "autoWidth": false,

        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>

