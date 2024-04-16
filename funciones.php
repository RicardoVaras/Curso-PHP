<?php

  function login(){
    global $conectar;
    
    $usuario=$_POST["usuario"];
    $password=$_POST["password"];
    
    
    if(empty($usuario) and empty($password)){ 
      header("Location:index.php?m=2");
      exit();
    }
    
    $sql="select usuario, password from usuarios where usuario='$usuario' and password='$password'";
    
    $resultado = mysqli_query($conectar,$sql);
    
    if(!$resultado){
      die("fallo de la ejecucion".mysqli_error($conectar));  
    }
    
    $fila = mysqli_fetch_assoc($resultado);
    
    if(is_array($fila) and count($fila)>0){
      header("Location:listar.php");
      exit();
    } else {
      header("Location:index.php?m=1");
      exit();
    }
  }
  
  function listar(){
    global $conectar;
      
    $sql="select * from usuarios";

    //echo $sql; exit();
    
    $resultado= mysqli_query($conectar,$sql);
      
    if(!$resultado){ 
      die("fallo de la ejecucion".mysqli_error($conectar));
    } 

    while($fila = mysqli_fetch_assoc($resultado)){
      echo $fila["id_usuario"];
      echo "<br>";
      echo $fila["usuario"];
      echo "<br>";
      echo $fila["password"];
      echo "<br><br>";
    }
  }

  function insertar($usuario,$password){
    global $conectar;
  
    $usuario=$_POST["usuario"];
    $password=$_POST["password"];
    
    if(empty($usuario) and empty($password)){
      die("los campos estan vacios");
    }
  
    //insertar un registro en la base de datos  
    $sql = "insert into usuarios(id_usuario,usuario,password) values(null,'$usuario','$password')";
    
    //echo $sql; exit();  
    //print_r($_POST); exit();
  
    $resultados = mysqli_query($conectar,$sql);
  
    if(!$resultados){ 
      die("fallo de la ejecucion".mysqli_error($conectar));
    } else {
      if(mysqli_affected_rows($conectar)==0){    
        echo "no se puede insertar";
      } else {
        echo "se ha insertado ".mysqli_affected_rows($conectar)." registros ";
      }
    }
  }

  function listar_id_usuario(){
    global $conectar;
    
    $sql="select id_usuario from usuarios";
    
    $resultado = mysqli_query($conectar,$sql);
     
    if(!$resultado){ 
      die("fallo de la ejecucion".mysqli_error($conectar));
    } 

    while($fila= mysqli_fetch_assoc($resultado)){
      $id= $fila["id_usuario"];
      echo "<option value='$id'>$id</option>";
    }
  }
  
  function editar_usuario($id_usuario){
    global $conectar;
     
    $usuario=$_POST["usuario"];
    $password=$_POST["password"];
    $id=$_POST["id_usuario"];
  
    if(empty($usuario) and empty($password)){
      die("los campos estan vacios");
    }
     
    $sql="update usuarios set usuario='$usuario', password='$password' where id_usuario=$id";
    
    //echo $sql; exit();       
    //print_r($_POST); exit();
     
    $resultado= mysqli_query($conectar,$sql);
     
    if(!$resultado){ 
      die("fallo de la ejecucion".mysqli_error($conectar));
    } else {
      if(mysqli_affected_rows($conectar)==0){
        echo "no se puede editar";
      } else {  
        echo "se ha editado ".mysqli_affected_rows($conectar)." registros ";
      }
    }    
  }

  function eliminar_usuario($id_usuario){
    global $conectar;
   
    $id=$_POST["id_usuario"];
  
    $sql="delete from usuarios where id_usuario=$id";
    
    $resultado= mysqli_query($conectar,$sql);
   
    if(!$resultado){ 
      die("fallo de la ejecucion".mysqli_error($conectar));
    } else {
      if(mysqli_affected_rows($conectar)==0){
        echo "no se puede eliminar";
      } else {  
        echo "se ha eliminado ".mysqli_affected_rows($conectar)." registros ";
      }
    }
  }

  // ME QUEDE EN VIDEO 38
?>