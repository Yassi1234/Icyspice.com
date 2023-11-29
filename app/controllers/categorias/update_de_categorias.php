<?php

include('../../config.php');

$nombre_categoria = $_GET['nombre_categoria'];
$id_categoria = $_GET['id_categoria'];

$sentencia = $pdo->prepare("UPDATE tb_categorias
 SET nombre_categoria=:nombre_categoria,
 fyh_actualizacion=:fyh_actualizacion
 WHERE id_categoria=:id_categoria");

$sentencia->bindParam(':nombre_categoria', $nombre_categoria, PDO::PARAM_STR);
$sentencia->bindParam(':fyh_actualizacion', $fechaHora, PDO::PARAM_STR);
$sentencia->bindParam(':id_categoria', $id_categoria, PDO::PARAM_INT);

if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = "Se actualizó de la categoria correctamente";
    $_SESSION['icono'] = "success";
    //header('Location: ' . $URL . '/roles/');

    ?>
    <script>
location.href = "<?php echo $URL;?>/categorias";
    </script>
    <?php

}else {
    session_start();
    $_SESSION['mensaje'] = "Error: No se pudo actualizar el rol";
    $_SESSION['icono'] = "error";
   //header('Location: ' . $URL . '/roles/update.php?id=' . $id_rol);
   ?>
   <script>
location.href = "<?php echo $URL;?>/categorias";
   </script>
   <?php
}
?>
