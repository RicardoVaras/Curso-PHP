<?php require("db.php");?>
<?php require_once("funciones.php");?>

<?php
  // mysqli_num_rows($resultado) = obtiene el número de filas de un resultado (se usa para validar si existen registros en la tabla de la bd)

  // mysqli_fetch_assoc($resultado) = obtiene una fila de resultados con un array asociativo

  // mysqli_fetch_row($resultado) = obtiena una fila de resultados como un array enumerado

  // mysqli_fetch_array($resultado) = es una versión extendida de la función mysqli_fetch_row(). Además de guardar la información en los índices 
  // numéricos del array resultante, la función mysqli_fetch_array() también puede guardar la información en índices asociativos

  // mysqli_affected_rows($conectar) = me devuelve el numero de filas afectadas, esto se hace cuando se hace un select, insert, update o eliminar,
  // por ejemplo si voy hacer un delete no puedo usar el mysqli_num_rows() ya que no me devolvería un registro, entonces usaría, mysqli_affected_rows

  if(isset($_POST["submit"])){    
    // insertar($_POST["usuario"],$_POST["password"]);  
    // editar_usuario($_POST["id_usuario"]);
    eliminar_usuario($_POST["id_usuario"]);
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
  <h2>CRUD (crear,seleccionar, editar, borrar)</h2>

  <!-- <a href="index.php">registrar</a>
  <a href="listar.php">listar</a>
  <a href="editar.php">editar</a>
  <a href="eliminar.php">eliminar</a> -->

  <?php listar();?>
   
  <form action="" method="POST">
    <input type="text" name="usuario" placeholder="usuario">
    <br>
    <input type="text" name="password" placeholder="password">
    <br>
    <select name="id_usuario" id="">
      <?php listar_id_usuario();?>
    <select>
    <br>
    <input type="submit" name="submit" value="eliminar">
  </form>
</body>
</html>