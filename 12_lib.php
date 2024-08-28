<?php
include_once './includes/header.php';
?>

<?php

$frutas2 = ["manzana ", "naranja ", "melon ", "uvas"];

echo count($frutas2);

echo " <br />";

$mi_nombre = "Juan pabo De la torre";

echo strtoupper($mi_nombre);
echo " <br />";

echo strtolower($mi_nombre);
echo " <br />";

$password = "  password1234";
var_dump(trim($password));
echo " <br />";

if (strlen(trim($password)) < 10)
  echo " El password es muy debil ";
else {
  echo " el password es muy fuerte ";
}


?>