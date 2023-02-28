<!DOCTYPE html>
<html>
<head>
    <title>Login de usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
 <style>
     body {font-family: Arial, Helvetica, sans-serif;}
     form {border: 3px solid #f1f1f1;padding: 16px;}
 </style>
 <body>
    <form action= "Login.php" method="POST">
    <div class="mb-3">
        <div class="col-2">   
            <h3>Login de usuario</h3>
            <label for="txt1" class="form-label">Usuario</label>
            <input type="" class="form-control" name="t1" required>
        </div>
    </div>
    <div class="mb-3">
        <div class="col-2"> 
            <label for="txt1" class="form-label">Contraseña</label>
            <input type="" class="form-control" name="t2" required>
        </div>
    </div>
    <button type="submit" class="btn btn-danger">Ingresar</button>
    </form>
</body>
<?php
    require('check_connection.php');
?>
</html>
