<?php
include_once './includes/header.php';
?>


<?php
$estudiante = [
  'nombre' => ' John',
  'apellidos' => ' Lopez Gomez',
  'pais' => ' colombia',
  'edad' => 18,
  'autenticado' => true
];



// html en php

echo "<h1> Hola! " . $estudiante['nombre'] . "</h1>";
?>

<!--php en html-->

<h1>Hola! <?php echo $estudiante['nombre']; ?> </h1>