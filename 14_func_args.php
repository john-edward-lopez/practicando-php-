<?php
include_once './includes/header.php';
?>

<?php
function saludar($nombre)
{
  echo "Bienvenido al sitio " . $nombre . "<br /> ";
}

saludar("lopez");
saludar("John");
saludar("edward");

function suma($numero1, $numero2)
{
  echo $numero1 + $numero2 . "<br />";
}

suma(3, 5)
?>




