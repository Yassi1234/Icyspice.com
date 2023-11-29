<?php
session_start();

if(isset($_SESSION['sesion email'])){
   //echo "si existe session de: ".$_SESSION['sesion email'];

   $email_sesion = $_SESSION['sesion email'];
   $sql= "SELECT us.id_usuario as id_usuario, us.nombres as nombres, us.email as email, rol.rol as rol 
   FROM tb_usuarios as us INNER JOIN tb_roles as rol ON us.id_rol = rol.id_rol where email='$email_sesion'";

   $query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
foreach ($usuarios as $usuario){
  $id_usuario_sesion = $usuario['id_usuario'];
    $nombres_sesion = $usuario['nombres'];
    $rol_sesion = $usuario['rol'];

}

}else{
  echo " No existe session ";
  header('Location: '.$URL.'/login');
}
?>