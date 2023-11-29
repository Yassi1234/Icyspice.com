<?php 
define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','siStemadeventas');

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try{
    $pdo = new PDO($servidor, $username= USUARIO, $password= PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8"));

}catch (PDOException $e){

    //print_r($e);
    echo "Error al conectar a la base de datos";
}
$URL= "http://localhost/IcySpice.com";
date_default_timezone_set("America/Santo_Domingo");
$fechaHora = date('Y-m-d h:i:s');


