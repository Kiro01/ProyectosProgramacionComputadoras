<?php
$conexion = null;
define('USER', 'root');
define('PASSWORD', '');
define('HOST', 'localhost');
define('DATABASE', 'quiz1');
try{
    $conexion = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
}catch (PDOException $e){
     echo "Error de conexion!";
     exit;
}
return $conexion;
?>
