<?php
if($_POST){
    session_start();
    require('Conexion.php');
    $u = $_POST['t1'];
    $p = $_POST['t2'];
    $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $conexion -> prepare("SELECT * FROM users WHERE name = :u AND
         password = :p");
    $query->bindParam(":u", $u);
    $query->bindParam(":p", $p);
    $query->execute();
    $usuario = $query->fetch(PDO::FETCH_ASSOC);
    if($usuario){
        header("location:successful_start.php");    
    }else{
        header("location:wrong_start.php");    }
}
?>