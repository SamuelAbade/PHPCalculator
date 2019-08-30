<?php
  $n1 = $_POST["v1"];
  $n2 = $_POST["v2"];
  $op = $_POST["op"];
  $resultado = 0;

  if(!is_numeric($n1) || !is_numeric($n2)){
    echo "<script type='javascript'>alert('Não é possível calcular letras, favor calcular números');";
    echo "javascript:window.location='index.php';</script>";
    exit;
  }
  session_start();
  $_SESSION["b1"] = $n1;
  $_SESSION["b2"] = $n2;
  if ($op == "adi") {
    $resultado = $n1 + $n2;
  }
  else if ($op == "sub") {
    $resultado = $n1 - $n2;
  }
  else if ($op == "div") {
    if($n2 == 0){
      echo "<script type='javascript'>alert('Não é possivel dividir números por zero.');";
      echo "javascript:window.location='index.php';</script>";
    }else{
      $resultado = $n1 / $n2;
    }
  }
  else if ($op == "mult") {
    $resultado = $n1 * $n2;
  }
  echo $resultado;
?>
<p><a href="expoente.php">Avançar pra calculadora de potências</a></p>
