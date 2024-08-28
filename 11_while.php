<?php
include_once './includes/header.php';
?>

<?php

$frutas2 = ["manzana ", "naranja ", "melon ", "uvas"];

$i = 0;

while ($i < count($frutas2)) {
  echo $frutas2[$i] . "<br />";
  $i++;
}

?>