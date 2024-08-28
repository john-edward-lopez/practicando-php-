<?php
include_once './includes/header.php';
?>

<?php
$frutas = array("manzana", "naranja", "melon", "uvas");

$estudiante = [
  'nombre' => ' John',
  'apellidos' => ' Lopez Gomez',
  'pais' => ' colombia',
  'edad' => 18,
  'autenticado' => true
];


echo "<pre>";
var_dump($estudiante);
echo "</pre>";

echo $estudiante['autenticado'];
echo "<br />";
echo $frutas[0];


echo "<pre>";
print_r($estudiante);
echo "</pre>";

?>

<?php
$michis_toman_agua = true;
$michis_ladran = false;

$resultado = $michis_toman_agua and $michis_ladran;

var_dump($resultado);
?>