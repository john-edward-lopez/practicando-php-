<?php
include_once './includes/header.php';
?>


<?php
for ($i = 0; $i <= 10; $i++) {
  if ($i == 10) {
    echo "El numero es DIEZ <br/>";
    continue;
  }


  echo "EL Numero es " . $i . "<br/>";
}


?>