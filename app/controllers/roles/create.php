<?php


include('../../config.php');

$rol = $_POST['rol'];

    $sentencia =$pdo->prepare("INSERT INTO tb_roles
    (rol, fyh_creacion)
VALUES (:rol,:fyh_creacion)");

   $sentencia->bindParam('rol', $rol);
   $sentencia->bindParam('fyh_creacion', $fechaHora);

   if($sentencia->execute() ){
    session_start();
    $_SESSION['mensaje'] = "Se registro el rol de la manera correcta";
    $_SESSION['icono']= "success";
    header('Location:'.$URL.'/roles/');

   }else{
   session_start();
   $_SESSION['mensaje'] = "Error las contraseñas no son iguales";
   $_SESSION['icono']= "success";
   header('Location:'.$URL.'/roles/create.php');
}




