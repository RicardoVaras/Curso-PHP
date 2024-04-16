<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <style>
    .color_verde{color:green}
    .color_rojo{color:red}
  </style>
  
  <h2>Operadores de comparacion</h2>  
  <form action="variables.php" method="POST" name="form" id="form">
    <label for="">Nombre</label> 
    <input type="text" name="nombre" id="nombre"> 
    <br/>
    <label for="">Edad</label> 
    <input type="text" name="edad" id="edad">
    <br/>
    <input type="submit" name="enviar" id="enviar" value="enviar">
  </form>

  <?php 
    
    $nombre = "Eyter";
    $edad = 18;

    echo "El nombre es: ".$nombre." tiene ".$edad." años";

    function inicio(){
      echo "<br>";
      calcular1();
      echo "<br>";
      calcular2();
      echo "<br>";
      echo "<br>";
    }

    function calcular1(){
      echo 10 + 20;
    }

    function calcular2(){
      echo 1 + 2;
    }

    inicio();

    function incrementar(){
      static $contador = 0;
      $contador++;

      echo $contador ."<br>";
    }
    incrementar();
    incrementar();
    incrementar();
    incrementar();

    if(3>2){
      echo "se cumple";
    }

    // $var1==$var2 igual que
    // $var1===$var2 identico que
    // $var1>$var2 mayor que
    // $var1<$var2 menor que
    // $var1>=$var2 mayor o igual que
    // $var1<=$var2 menor o igual que
    // $var1!=$var2 diferente que
    // <h2>
    //   and &&
    //   or ||
    //   not !
    // </h2>
  
    if(isset($_POST["enviar"])){
      $nombre=$_POST["nombre"];
      $edad=$_POST["edad"];
      
      if($nombre=="eyter" and $edad==18){
        echo "<p class='color_verde'>puede acceder al sistema</p>";
      
      } else {
        echo "<p class='color_rojo'>no puede acceder al sistema</p>";
      }
    }

    // ARREGLOS
    $datos = array("eyter","carro",1,9,"color");
    $array_asoc= array("nombre"=>"eyter","apellido"=>"higuera");

    if(is_array($array_asoc)){
      echo "es un array"; 
    } else {
      echo "no es un array";
    }

    // SWITCH CASE
    $numero=10;
    
    switch($numero){
      case 20:
      echo "es el 20";
      break;
          
      case 10:
      echo "es el 10";
      break;
          
      default:
      echo "no se encuentra ningun numero";
      break;
    }

    //CICLO WHILE
    $contador=0;
    
    while($contador<=20){
      echo $contador."<br>";
      $contador=$contador + 1;
    }

    //CICLO FOR

    /*for($contador=0; $contador<=20;$contador++){   
      echo $contador."<br>"; 
    }*/
    
    $semana= array("lunes","martes","miercoles","jueves","viernes","sabado","domingo");
    /*echo $semana[0];
    echo $semana[1];*/
    
    //echo count($semana);
  
    for($i=0; $i<count($semana);$i++){  
      echo $semana[$i]."<br>";  
    }

    //CICLO FOREACH
    $datos= array("nombre"=>"eyter","apellido"=>"higuera","telefono"=>12345);
        
    //echo $datos["nombre"];
 
    foreach($datos as $nombre=>$valor){
      echo "el nombre es $nombre y el valor asignado es $valor<br>";
    }

    //FUNCION CON PARAMETROS Y RETURN
    function calcular($numero1,$numero2){     
      $sumar = $numero1 + $numero2;
       //echo $sumar;
      return $sumar;
    }
    /*$num1=1;
    $num2=2;*/

    $resultado= calcular(5,2);
    echo $resultado;

    //OPERADORES MATEMATICOS
    //expresion exponencial
    echo pow(2,7);
    echo "<br>";
    
    //genera un numero aleatoria
    echo rand(2,3000);
    echo "<br>";
    
    //genera una raiz cuadrada
    echo sqrt(16);
    echo "<br>";
    
    //permite redondear francciones hacia arriba
    echo ceil(7.8);
    echo "<br>";
    
    //permite redondear fracciones hacia abajo
    echo floor(8.6);
    echo "<br>";
    
    //redondear
    echo round(6.5);

    
    $string="hola mundo";
      
    //mide la longitud de un string
    echo strlen($string);
    echo "<br>";
      
    //convierte todo en mayuscula
    echo strtoupper($string);
    echo "<br>";
    
    //convierte todo en minuscula
    echo strtolower($string);
    echo "<br>";
    
    //convierte primera letra en mayuscula
    echo ucfirst($string);
  ?>

  <pre>
    <?php echo print_r($datos);?>
  </pre>
  
  <pre>
    <?php echo print_r($array_asoc);?>
  </pre>

</body>
</html>