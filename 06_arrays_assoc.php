<?php
include_once './includes/header.php';
?>

<?php
$estudiante = [
  'nombre' => ' John',
  'apellidos' => ' Lopez Gomez',
  'pais' => ' colombia'

];

echo "<pre>";
var_dump($estudiante);
echo "</pre>";

echo $estudiante['nombre'] . " " . $estudiante['apellidos'] . " del pais " . $estudiante['pais'] // concatenar php
?>
