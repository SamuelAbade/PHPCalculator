<?php
  $exp = $_POST["exp"];
  $r1 = 0;
  $r2 = 0;
  session_start();
  $b1 = $_SESSION["b1"];
  $b2 = $_SESSION["b2"];

  $r1 = pow($b1,$exp);
  $r2 = pow($b2,$exp);

  echo " <center> <p> $b1 <sup> $exp </sup> = $r1 </p> <p> $b2 <sup> $exp </sup> = $r2 </p> </center>";
?>
