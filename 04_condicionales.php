<?php
include_once './includes/header.php';
?>


<?php

$numero_1 = 20;
$numero_2 = 20;


if ($numero_1 > $numero_2) {
  echo "El Numero 2 es mayor ";
} else if ($numero_1 == $numero_2) {
  echo "Son Iguales ";
} else {
  echo " El Numero 1 es menor  ";
}


?>