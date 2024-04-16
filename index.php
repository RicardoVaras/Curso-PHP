<?php
  if(isset($_POST["submit"])){
    $array= array("eyter","daniel","jose","carlos");
    
    $nombre=$_POST["nombre"];
    $password= $_POST["password"];
    
    /* if(strlen($nombre) >5){    
      echo "puede acceder al sistema<br>";
    } else {
      echo "no puede acceder al sistema";
    }*/
    
    if(!in_array($nombre,$array)){
      echo "no puede acceder al sistema<br>"; 
    } else {
      echo "puede acceder al sistema";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <form action="" method="POST">
    <input type="text" name="nombre" placeholder="usuario">
    <br>
    <input type="text" name="password" placeholder="password">
    <br>
    <input type="submit" name="submit" value="submit">
  </form>
    
</body>
</html>